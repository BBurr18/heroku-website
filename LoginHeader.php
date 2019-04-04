<?php include_once("index.html"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <link rel = "stylesheet" href ="styleloginheader.css">
    </head>
        <body> 
           
                <nav class ="navh">
                <a class = "top1" src = "/" id = "logo"> Site Logo </a>
                    
                    <li class="list-itemh" <?php if ($thisPage=="HOME")
                        echo " class=\"currentpage\""; ?>>
                        <a class="nav-itemh" href="Help.php">Help</a>
                        </li>
                        
                    </nav>
                
            </body>
    </html>
