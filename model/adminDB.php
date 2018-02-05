<?php

    function get_Admin($username, $password){
        global $db;
        $stmt = $db->prepare('SELECT * FROM User WHERE userName = :userName AND password = :password AND userType = 1; ');
        $stmt-> bindParam(':userName', $username);
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
    
    function getAdminID($username){
        global $db;
        //getting the userID
        $userIDstmt = $db ->prepare('SELECT userID FROM User WHERE userName = :userName;');
        $userIDstmt-> bindParam(':userName', $userName);
        $userIDstmt-> execute();
        $userIDstmt-> $userIDstmt->fetch();
        
        $userID-> $userIDstmt['userID'];
        //getting the AdminID
        $adminIDstmt = $db ->prepare('SELECT adminID FROM Admin WHERE userName = :userID;');
        $adminIDstmt-> bindParam(':userID', $userID);
        $adminIDstmt-> execute();
        $adminIDstmt-> $userIDstmt->fetch();
        
        $adminID-> $adminIDstmt['adminID'];
        
        return $adminID;
        
    }
?>