<html>
 <body>
  <head>
   <title>
     Door
   </title>
  </head>

   <form method="post">
    <br>
    &nbsp;  &nbsp; <input type="submit" value="LOCK" name="LOCK">
    <br>
    <br>
    &nbsp; <input type="submit" value="UNLOCK" name="UNLOCK">
   </form>
 </body>
</html>

<?php
    if(isset($_POST['LOCK']))
    {
        echo system("python3 ~/git/AirplainHeater/PythonScripts/main.py 2>&1");
    }
    if(isset($_POST['UNLOCK']))
    {
        echo system("python3 ~/git/AirplaneHeater/PythonScrupts/unlock.py 2>&1");
    }
?>
