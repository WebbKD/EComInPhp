<?php

    function placeOrder($customerID, $priceOfOrder, $token) {
        global $db;
        //making the order
        $stmt= $db->prepare('INSERT INTO tbl_Order(customerID, priceOfOrder, token) values (:customerID, :priceOfOrder, :token);');
        $stmt-> bindParam(':customerID', $customerID);
        $stmt-> bindParam(':priceOfOrder', $priceOfOrder);
        $stmt-> bindParam(':token', $token);
        $stmt-> execute();
        //ending the order
        
     }
      
     function getOrderID($customerID){
          global $db;
        // retriving the order ID
        $order = $db->prepare('SELECT * FROM tbl_Order WHERE customerID = :customerID ORDER BY orderID DESC;');
        $order-> bindParam(':customerID', $customerID);
        $order-> execute();
        $order = $order->fetch();
        $orderID = $order['orderID'];
        //ending of retriving the orderID
        return $orderID;
     }
    
    function insertOrderDetails($orderID, $productID, $qty){
         global $db;
        //inserting the order details
        $stmt2 = $db->prepare('INSERT INTO tbl_orderDetails(orderID, productID, qty) values (:orderID, :productID, :qty);');
        $stmt2-> bindParam(':orderID', $orderID);
        $stmt2-> bindParam(':productID', $productID);
        $stmt2-> bindParam(':qty', $qty);
        $stmt2-> execute();
        //ending the order details
    }
    
    function getOrderHistory(){
        global $db;
        $stmt = $db->prepare('SELECT * FROM tbl_Order INNER JOIN Customer ON tbl_Order.customerID = Customer.customerID');
        $stmt-> execute();
        return $stmt;
    }
    
    function getThisOrder($orderID){
        global $db;
        $stmt = $db->prepare('SELECT * FROM tbl_orderDetails od INNER JOIN Products p ON od.productID = p.productID WHERE od.orderID = :orderID');
        $stmt-> bindParam(':orderID', $orderID);
        $stmt-> execute();
        return $stmt;
    }



?>