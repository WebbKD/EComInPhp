<?php
require('../model/db.php');
require('../model/productDB.php');
//starting the session
session_start();

if(isset($_POST['action'])){
    
    $action = $_POST['action'];
    
} else if(isset($_GET['action'])){
    
    $action = $_GET['action'];
    
} else {
    
    $action = 'store_front';
    
}

if($action == "store_front"){
    
    $products = get_products();
    
    include('products.php');
    
}


?>