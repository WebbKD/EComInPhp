<?php
require('../model/db.php');
require('../model/adminDB.php');
require('../model/productDB.php');
require('../model/orderDB.php');
require('../model/customerDB.php');
//starting the session
session_start();

if(isset($_POST['action'])){
    
    $action = $_POST['action'];
    
} else if(isset($_GET['action'])){
    
    $action = $_GET['action'];
    
} else {
    
    $action = 'login_form';
    
}

if($action == 'login_form'){
    
    include('login.php');
} else if($action == 'login'){
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    
    if(get_Admin($username, $password) == true){
        
        $_SESSION['login_admin'] = $username;
        include('adminpanel.php');
    } else{
        $error = "You entered the wrong username and password";
        include('login.php');
    }
} else if($action == 'admin_panel'){
    include('adminpanel.php');
}else if($action == 'view_products'){
    
    $productList = get_products();
    
    include('adminProductList.php');
}else if($action == 'add_Product'){
    
    include('adminAddProduct.php');
    
} else if($action == "add_the_product"){
    
    //file upload code
    $filename = $_FILES["filename"]["name"];
    $tmpFileName = $_FILES["filename"]["tmp_name"];
    $path = "../images/" . $filename;
     if(is_uploaded_file($tmpFileName)){ // check if file is uploaded
      if(move_uploaded_file($tmpFileName, $path)){ // now move the uploaded file to path (directory)
       echo "File uploaded!";
      }
     }else{
         echo "file did not upload";
         print_r($_FILES);
     }
    $productName = $_POST['productname'];
    $description = $_POST['description'];
    $price = floatval($_POST['price']);
    $productImage = $filename;
    
    add_prodcut($productName, $description, $price, $productImage);
    
    $productList = get_products();
    include('adminProductList.php');
    
}else if($action == "edit_product"){
    $productID = $_GET['productID'];
    $products = get_productByID($productID);
   
    
    include('adminEditProduct.php');
}else if($action == 'edit_the_product'){
    
    $productID = $_POST['productID'];
    
    $filename = $_FILES["filename"]["name"];
    $tmpFileName = $_FILES["filename"]["tmp_name"];
    $path = "../images/" . $filename;
     if(is_uploaded_file($tmpFileName)){ // check if file is uploaded
      if(move_uploaded_file($tmpFileName, $path)){ // now move the uploaded file to path (directory)
       echo "File uploaded!";
       echo($filename);
       print_r($_FILES);
       
      }
     }else{
         echo "file did not upload";
         
     }
    $productName = $_POST['productname'];
    $description = $_POST['description'];
    $price = floatval($_POST['price']);
    $productImage = $filename;
    
    update_product($productID, $productName, $description, $price, $productImage);
    $productList = get_products();
    include('adminProductList.php');
    
}else if($action == "delete_product"){
    
    $productID = $_POST['productID'];
    
    delete_product($productID);
    $productList = get_products();
    include('adminProductList.php');
}else if($action == "view_orders"){
    
    $ordersList = getOrderHistory();
    include('adminOrderList.php');
    
}else if($action == 'view_order'){
    
    $orderID = $_GET['orderID'];
    $fName = $_GET['fName'];
    $lName = $_GET['lName'];
    
    $thisOrder = getThisOrder($orderID);
    
    include('adminOrder.php');
}else if($action == 'view_customer'){
    
    
    $customerList = get_customerList();
    include('adminCustomerList.php');
    
}else if($action == 'view_customerDetails'){
    
    $customerID = $_GET['customerID'];
    
    $customerDetails = get_customerDetails($customerID);
    include('adminCustomer.php');
}

?>