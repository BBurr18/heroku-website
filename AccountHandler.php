<?php
    require_once "Dao.php";
    session_start();
    $_SESSION['test'] = $user_name;
    $dao = new Dao();
    $user_name = $_POST["username"];
    $password = $_POST["password"];
    $user_name_in_the_database = $dao->getUsername($user_name);
    $user = $user_name_in_the_database['Username'];
    if($user == $user_name){
        $_SESSION['message'] = "Error, this username already exist.";  //setting a session object message value to error if password is wrong
        header("Location: Create.php");
        exit;
    }else{
        $dao->createUser($user_name,$password);
        $_SESSION['print_name'] = $user_name;
        header("Location: Home.php");
    }

  ?>