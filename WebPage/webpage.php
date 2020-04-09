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
        echo system("python /var/www/html/DOOR/lock.py 2>&1");
        system("echo DOOR_LOCKED | wall");
    }
    if(isset($_POST['UNLOCK']))
    {
        echo system("python /var/www/html/DOOR/unlock.py 2>&1");
        system("echo DOOR_UNLOCKED | wall"); 
    }
?>