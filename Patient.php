<?php 
session_start();
include_once("index.html"); 
include_once("header.php"); 
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Patient </title>
    <link rel = "stylesheet" href = "stylepatient.css">
  </head>
  <body>
      <div id = "page-container">
        <?php require_once('header.php'); ?>
        <div id= "content-wrap">
            <form method="POST" action="PatientHandler.php">
                <div><label for="firstname">Search Patients:</label> 
                  <input type="text" id="firstname" name="firstname"  > </div>        
              </form>
          <section>
            <div class="row">
              <div class= "list">
                <div class="padded">
                  <nav>
                    <ul>
                      <li> <a> Chart Notes  </a></li>
                      <li> <a> RX History    </a></li>
                      <li> <a> Labs </a></li>
                    </ul>
                  </nav>
                </div>
              </div>

            <div class = "content">
              <div class="padded">
                <p> First Name:
                <?php if(isset($_SESSION['firstname'])){  echo $_SESSION['firstname'];} ?> 
                    <br>
                    Last Name: 
                    <?php if(isset($_SESSION['lastname'])){  echo $_SESSION['lastname'];} ?>
                    <br>
                    Phone Number:
                    <?php if(isset($_SESSION['lastname'])){  echo $_SESSION['phone'];} ?>

                <p>
              </div>
            </div>
          </div>
        </section>
        </div>
        <footer id ="footer">
          <?php require_once('footer.php'); ?>
          </footer>
      </div>
    </body>
</html>
