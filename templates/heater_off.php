<html>
 <body>
  <head>
   <title>
     Heater Turn Off
   </title>
  </head>
    <h1> Turn Off Heater? </h1>
   <form method="post">
    <br>
    &nbsp;  &nbsp; <input type="submit" value="OFF" name="OFF">
    <br>
    &nbsp;  &nbsp; <input type="submit" value="BACK" name="GO BACK">
   </form>
 </body>
</html>


<?php
    if(isset($_POST['OFF']))
    {
        echo system("python3 /var/www/html/PythonScripts/off.py 2>&1");
    }
    if(isset($_POST['GO BACK']))
    {
      header('Location: /');
      exit();
    }
?>

