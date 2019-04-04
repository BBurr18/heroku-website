<?php
//this is index.php
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>BurrReferrals </title>
    <link rel = "stylesheet" href ="style.css">
  </head>
  <body>
    <?php require_once('header.php'); ?>

    <section>
      <div class="row">

        <div class= "list">
          <div class="padded">
            <nav>
              <ul>
                <li> <a> Notes </a></li>
                <li> <a> Logs </a></li>
                <li> <a> Tasks </a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class = "content">
          <div class="padded">
            <p>Welcome to Burr Referalls. Eventually this site will be an online medical records management system.
              The goal is to automate the process in which Referalls are inputted into databases for doctor's offices.
              From what I took on with the idea of the site, it has proven to be much more complex than originally hoped.
              The site will expand in time. <br> <br>
              Navigate to the patients page and search for the boy who lived "Harry". His very breif info stored in the patient
              database will pop up. <p>
          </div>
        </div>

      </div>
    </section>
    <?php require_once('footer.php'); ?>

  </body>
</html>
