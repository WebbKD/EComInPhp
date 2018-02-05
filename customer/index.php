<?php
require('../model/db.php');
require('../model/customerDB.php');
require('../model/productDB.php');
require('../model/cartDB.php');
require('../model/orderDB.php');
require_once('../config.php'); 

//starting the session
session_start();

if(isset($_POST['action'])){
    
    $action = $_POST['action'];
    
} else if(isset($_GET['action'])){
    
    $action = $_GET['action'];
    
} else {
    
    $action = 'customer_login';
    
}

if($action == 'customer_login'){
    
    
    include('login.php');
    
}else if($action == 'login'){
    
    $userName = $_POST['username'];
    $password = $_POST['password'];
    
    echo $userName;
    echo $password;
    
    if(get_customer($userName, $password) == true){
        $customerID = get_customer_ID($userName, $password);
        
        $_SESSION['login_Customer'] = $userName;
        $_SESSION['login_Customer_ID'] = $customerID;
        
        include('customerHome.php');
    }else{
        die();
    }
    
}else if($action == 'register'){
    
    include('register.php');
    
}else if($action == 'signUP'){
    
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    
    add_customer($userName, $password, $fname, $lname, $emailAddress, $phoneNumber);
    
    if(get_customer($userName, $password) == true){
        $customerID = get_customer_ID($userName, $password);
        
        $_SESSION['login_Customer'] = $userName;
        $_SESSION['login_Customer_ID'] = $customerID;
        
        echo $_SESSION['login_Customer_ID'];
        
        include('customerHome.php');
    }else{
        die();
    }
    
}else if($action == 'customerStore'){
    
    $products = get_products();
    
    
    include('customerStore.php');
    
}else if($action == 'add_item'){
    $customerID = $_SESSION['login_Customer_ID'];
    $productID = $_GET['productID'];
    
    addToCart($customerID, $productID);
    
    $products = get_products();
    include('customerStore.php');
}else if($action == 'show_cart'){
    $customerID = $_SESSION['login_Customer_ID'];
    $cart_Items = getCartDetails($customerID);
    $cart = getCartDetails($customerID);
    include('customerCart.php');
    
}else if($action == 'checkoutOrder'){
    
    
    $customerID = $_SESSION['login_Customer_ID'];
    $priceOfOrder = $_POST['totalPrice'];
    $productIDs = $_POST['productID'];
    $qtys = $_POST['qty'];
    
    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];

    $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
     ));

    $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $priceOfOrder * 100,
      'currency' => 'usd',
      "source" => $token,
    ));
    
    //place the order first
    placeOrder($customerID, $priceOfOrder, $token);
    
    //make the loop to fill in the order details
    $orderID = getOrderID($customerID);
    //the order id
    
    foreach(array_combine($productIDs, $qtys) as $productID => $qty ){
    //need to make an insert loop for the order details
    insertOrderDetails($orderID, $productID, $qty);
    }
    
    
    $cart = getCartDetails($customerID);
    $cart_Items = getCartDetails($customerID);
    include('customerCart.php');
    
}





?>