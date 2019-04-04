<?php
//This is Login.php
  include_once("index.html"); 
  session_start();
  require_once('LoginHeader.php');
?>
<html>
  <head>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <h1>Burr Referrals Login</h1>
    <form method="POST" action="LoginHandler.php">
      <div class = container>
          <div class = divvy><label for="username">Username:</label> 
            <input type="text" id="username" name="username"  
              value = "<?php if(isset($_SESSION['test'])){ echo $_SESSION['test'];}?>">
                </div>
          <div class = divvy><label for="password">Password:</label> <input type="password" id="password" name="password"></div>
          <?php 
            if (isset($_SESSION['message'])) { //checking to see if a session variable is set
              echo "<div id='message'>" . $_SESSION['message'] . "</div>";
            }
            unset($_SESSION['message']);  //resets $_SESSION['message'] immediately in session
          ?>
          <div class = divvy><input type="submit" value="Submit"></div>
          <div class = register > 
            <p> Dont have an account?</p>
            <a href = "Create.php">Register</a>
            </div>
      </div>
    </form> 
  </body>
</html>
    
            
