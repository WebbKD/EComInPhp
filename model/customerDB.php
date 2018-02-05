<?php

    function add_customer($userName, $password, $fname, $lname, $emailAddress, $phoneNumber){
        global $db;
        //adding user to the customer database table
        $stmt = $db-> prepare('INSERT INTO User(userName, password, userType) VALUES (:userName, :password, 2);');
        $stmt-> bindParam(':userName', $userName);
        $stmt-> bindParam(':password', $password);
        $stmt-> execute();
        
        //selecting the user ID
        $user = $db-> prepare('SELECT * FROM User WHERE userName = :userName;');
        $user-> bindParam(':userName', $userName);
        $user-> execute();
        $user = $user->fetch();
        $userID = $user['userID'];
        // ending of grabbing the user ID
        
        //uploading customer informaiton
        $stmt2 = $db-> prepare('INSERT INTO Customer(fName, lName, emailAddress, phoneNumber, userID) VALUES(:fName, :lName, :emailAddress, :phoneNumber, :userID);');
        $stmt2-> bindParam(':fName', $fname);
        $stmt2-> bindParam(':lName', $lname);
        $stmt2-> bindParam(':emailAddress', $emailAddress);
        $stmt2-> bindParam(':phoneNumber', $phoneNumber);
        $stmt2-> bindParam(':userID', $userID);
        $stmt2-> execute();
    }
    
    function get_customer($userName, $password){
        global $db;
        $stmt = $db-> prepare('SELECT * FROM User WHERE userName = :userName AND password = :password AND userType = 2;');
        $stmt-> bindParam(':userName', $userName);
        $stmt-> bindParam(':password', $password);
        $stmt-> execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $result = $stmt->rowCount();

        echo $result;
        echo $row;
        if($result > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function get_customer_ID($userName, $password){
        global $db;
        //getting user ID
        $user = $db->prepare('SELECT * FROM User WHERE userName = :userName AND password = :password;');
        $user->bindParam(':userName', $userName);
        $user->bindParam(':password', $password );
        $user->execute();
        $user = $user->fetch();
        $userID = $user['userID'];
        
        $stmt = $db->prepare('SELECT * FROM Customer WHERE userID = :userID;');
        $stmt-> bindParam('userID', $userID);
        $stmt-> execute();
        $stmt = $stmt->fetch();
        
        $CustomerID = $stmt['customerID'];
        
        return $CustomerID;
    }
    
    function get_customerList(){
        global $db;
        $stmt = $db->prepare('SELECT * FROM Customer');
        $stmt->execute();
        return $stmt;
    }
    
    function get_customerDetails($customerID){
        global $db;
        $stmt = $db->prepare('SELECT * FROM Customer WHERE customerID = :customerID');
        $stmt-> bindParam(':customerID', $customerID);
        $stmt-> execute();
        return $stmt;
    }
    

?>