<?php

    function get_products(){
        global $db;
        $stmt = $db->prepare('SELECT * FROM Products;');
        $stmt-> execute();
        return $stmt;
        }
        
    function get_productByID($productID){
        global $db;
        $stmt = $db->prepare('SELECT * FROM Products WHERE productID = :productID');
        $stmt-> bindParam(':productID', $productID);
        $stmt-> execute();
        return $stmt;
        }
    
    
    function add_prodcut($productName, $description, $price, $productImage){
        global $db;
        $stmt = $db->prepare('INSERT INTO Products(productName, description, price, productImage) values (:productName, :description, :price, :productImage); ');
        $stmt-> bindParam(':productName', $productName);
        $stmt-> bindParam(':description', $description);
        $stmt-> bindParam(':price', $price);
        $stmt-> bindParam('productImage', $productImage);
        $stmt-> execute();
    }
    
    function delete_product($productID){
        global $db;
        $stmt = $db->prepare('DELETE FROM Products WHERE productID = :productID;');
        $stmt-> bindParam('productID', $productID);
        $stmt-> execute();
        
    }
    
    function update_product($productID, $productName, $description, $price, $productImage){
        global $db;
        $stmt = $db->prepare('UPDATE Products SET productName = :productName, description = :description, price = :price, productImage = :productImage WHERE productID = :productID');
        $stmt-> bindParam(':productID', $productID);
        $stmt-> bindParam(':productName', $productName);
        $stmt-> bindParam(':description', $description);
        $stmt-> bindParam(':price', $price);
        $stmt-> bindParam(':productImage', $productIamge);
        $stmt-> execute();
    }







?>