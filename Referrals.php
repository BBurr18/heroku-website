<?php include_once("index.html"); ?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Refferals </title>
    <script src = "henry/main.js"></script>
    <link rel = "stylesheet" href ="stylereferral.css">
  </head>
    <body>
      <div id = "page-container">
        <?php require_once('header.php'); ?>
        <div id= "content-wrap">
          <section>
            <div class="row">
              <div class= "list">
                <div class="padded">
                  <nav>
                    <ul>
                      <li> <a> Upload </a></li>
                      <li> <a> Edit </a></li>
                    </ul>
                  </nav>
                </div>
              </div>

            <div class = "content">
              <div class="padded">
                <p>This page is where the automation will occur. The goal is to have a scanner parse through the referral 
                  and automatically input the data for the corresponding patient. <p>
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
