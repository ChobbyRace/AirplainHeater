<html>
 <body>
  <head>
   <title>
     Heater Turnon
   </title>
  </head>

   <form method="post">
    <br>
    &nbsp;  &nbsp; <input type="submit" value="ON" name="ON">
    <br>
    <br>
    &nbsp; <input type="submit" value="OFF" name="OFF">
   </form>
 </body>
</html>


<?php
    if(isset($_POST['ON']))
    {
        echo system("python3 /var/www/html/PythonScripts/on.py 2>&1");
    }
    if(isset($_POST['OFF']))
    {
        echo system("python3 ~/PythonScrupts/unlock.py 2>&1");
    }
?>

