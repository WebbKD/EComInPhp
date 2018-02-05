<?php
    
    function getCartDetails($customerID){
        global $db;
        $stmt = $db-> prepare('SELECT * FROM Cart INNER JOIN Products ON Cart.productID = Products.productID WHERE customerID = :customerID;');
        $stmt-> bindParam(':customerID', $customerID);
        $stmt-> execute();
        return $stmt;
        
    }
    
    function addToCart($customerID, $productID){
        global $db;
        $stmt = $db-> prepare('INSERT INTO Cart(customerID, productID, quantity) VALUES(:customerID, :productID, 1);');
        $stmt-> bindParam(':customerID', $customerID );
        $stmt-> bindParam(':productID', $productID);
        $stmt-> execute();
    }

?>