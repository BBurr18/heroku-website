<?php session_start();
include_once("index.html"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel = "stylesheet" href ="stylehead.css">
  </head>
  <body> 
      <nav class ="navh">
        <div class = signedin>
            <?php if(isset($_SESSION['print_name'])){  $name = $_SESSION['print_name'];} ?>
            <p class = signedin>Signed In as: <? $name?> <p>
           
            <p class = signedin> <?php echo $name ?> </p>
           
            </div>
        <a class = "top2" href = "Logout.php"> Logout </a>
        <a class = "top1" src = "/" id = "logo"> Site Logo </a>
        <ul class="nav-bottomh">
         <li class="list-itemh" <?php if ($thisPage=="HOME")
            echo " class=\"currentpage\""; ?>>
             <a class="nav-itemh" href="Home.php">Home</a>
            </li>
          <li class="list-itemh" <?php if ($thisPage=="REFERRALS")
           echo " id=\"currentpage\""; ?>>
             <a class="nav-itemh" href="Referrals.php">Referrals</a>
           </li>
          <li class="list-itemh" <?php if ($thisPage=="Patient")
          echo " id=\"currentpage\""; ?>>
            <a class="nav-itemh" href="Patient.php">Patient</a>
           </li>
          <li class="list-itemh" <?php if ($thisPage=="Page Four")
           echo " id=\"currentpage\""; ?>>
          <a class="nav-itemh" href="#">Add Patient</a>
          </li>
        </ul>
      </nav>
  </body>
</html>
