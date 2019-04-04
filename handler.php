<!-- class for login form -->
<?php
  include_once("Dao.php"); 
  session_start();
  
  //Pretend i'm looking this up in a database
  $password_in_the_database = "abc123";
  if ($password_in_the_database != $_POST["password"]) {
    $_SESSION['message'] = "Error, the password was incorrect.";  //setting a session object message value to error if password is wrong
    header("Location: login.php");
    exit();
  } else {
    $_SESSION['logged_in'] = true;
    header("Location: index.php");
  }
 
  // function createUser () {
  //   $user_name = $_POST["username"];
  //   $dao = new Dao();
  //   $conn = $dao->getConnection();
  //   //$user_name_in_the_database pull from database
  //   if ($user_name_in_the_database != $user_name) {
  //     $_SESSION['message'] = "Error, this username already exists.";  //setting a session object message value to error if password is wrong
  //     header("Location: login.php");
  //     exit();
  //   } else {
  //     $_SESSION['logged_in'] = true;
  //     header("Location: index.php");
  //   }
  // }
  
    
  ?>