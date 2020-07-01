<html>
 <body>
  <head>
   <title>
     Heater Turn On
   </title>
  </head>
    <h1> Turn On Heater? </h1>
   <form method="post">
    <br>
    &nbsp;  &nbsp; <input type="submit" value="ON" name="ON">
    <br>
    &nbsp;  &nbsp; <input type="submit" value="BACK" name="GO BACK">
   </form>
 </body>
</html>


<?php
    if(isset($_POST['ON']))
    {
        echo system("python3 /var/www/html/PythonScripts/on.py 2>&1");
    }
    if(isset($_POST['GO BACK']))
    {
      header('Location: /');
      exit();
    }
?>

