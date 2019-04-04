<form method="post" action="./handler.php">
      <div><label for="username">Username:</label> <input type="text" id="username" name="username"></div>
      <div><label for="password">Password:</label> <input type="password" id="password" name="password"></div>
      <?php 
      
      if (isset($_SESSION['message'])) { //checking to see if a session variable is set
        echo "<div id='message'>" . $_SESSION['message'] . "</div>";
      }
      unset($_SESSION['message']);  //resets $_SESSION['message'] immediately in session
      ?>
      
      <div><input type="submit" value="Login"></div>
    </form> 