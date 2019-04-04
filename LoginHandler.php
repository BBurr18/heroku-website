<?php
    session_start();
    require_once "Dao.php";
    

    $dao = new Dao();

    $user_name = $_POST["username"];
    $_SESSION['test'] = $user_name;
    $user_name_in_the_database = $dao->getUsername($user_name);
    $user = $user_name_in_the_database['Username'];
    
    $dao->log($user." username pulled from database");

    $password = $_POST["password"];
    $password_in_database = $dao->getPassword($password);
    $pass = $password_in_database['Password'];
    $dao->log($pass." password pulled from database");

    $dao->log($password);

    

    // echo $password_in_database;
    $_SESSION['message'] = $user_name_in_the_database;
    if ($user != $user_name || $user_name == "") {
        $dao->log("inside conditional. In LoginHandler");
        $_SESSION['message'] = "Error, this username doesn't exist.";  //setting a session object message value to error if password is wrong
        header("Location: index.php");
        exit;
    } else {
        if($pass != $password){
            $dao->log("inside conditional #2. In LoginHandler");

            $_SESSION['message'] = "Error, you entered the wrong password.";  //setting a session object message value to error if password is wrong
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['logged_in'] = true;
            $_SESSION['print_name'] = $user_name;
            header("Location: Home.php");
        }
    }
  ?>