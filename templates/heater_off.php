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
    <br>
    <br>
    &nbsp;  &nbsp; <input type="submit" value="GO BACK" name="BACK">
   </form>
 </body>
</html>


<?php
    if(isset($_POST['OFF']))
    {
        echo system("python3 ../PythonScripts/off.py 2>&1");
    }
    if(isset($_POST['BACK']))
    {
	header('Location: http://raspberrypi:5351/', true, 301);
	exit();
    }
?>

