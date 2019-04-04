<!DOCTYPE html>
<include 'example.php'?;>
<html lang="en">
<head>
<link rel = "stylesheet" href ="stylefoot.css">
</head>
<body>
  <div class = "conatain">
  <nav class="navf">
    <ul class="nav-bottomf">
      <li class="list-itemf" <?php if ($thisPage=="Home")
      echo " class=\"currentpage\""; ?>>
      <a class="nav-itemf" href="Home.php">Home</a></li>
      <li class="list-itemf" <?php if ($thisPage=="Help")
      echo " id=\"currentpage\""; ?>>
      <a class="nav-itemf" href="example.php">Help</a></li>
    </ul>
  </nav>
</div>
</body>
</html>
