<?php
    
    $dsn = 'mysql:host=localhost;dbname=the_network';
    $username = 'webbkd';
    $password = '';
    
    try{
        $db= new PDO($dsn, $username, $password);
    } catch(PDOExecption $error){
        $error_message = $error->getMessage();
        include('..errors/database_error.php');
        exit();
    }
?>