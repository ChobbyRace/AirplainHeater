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
    <br>
    <br>
    &nbsp;  &nbsp; <input type="submit" value="GO BACK" name="BACK">
   </form>
 </body>
</html>


<?php
    if(isset($_POST['ON']))
    {
        echo system("python3 ../PythonScripts/on.py 2>&1");
    }
    if(isset($_POST['BACK']))
    {
      header('Location: http://localhost:5351/', true, 301);
      exit();
    }
?>

