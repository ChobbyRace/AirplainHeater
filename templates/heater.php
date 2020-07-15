<html>
<head>
    <link rel="stylesheet" href="static/styles.css" />
</head>
<body>
<div id="p00">
        <h1>Heater Control Page</h1>
        <p><i>Control a heater from the conveinience of your own home!</i></p>
</div>
<div class="topnav">
        <a class="active" href="../index.html">Home</a>
        <a href="heater.php">Heater</a>
        <a href="blog.html">Blog</a>
        <a href="about.html">About</a>
</div>
<div>
    <p> The ability to control the heater from your home is very cool.
        This webpage has been a good learning experience
        Make this into something cooler when you have the time
    </p>
    <br>
    <br>
        <h2 id="p02">What would you like to do?</h2>
        <form method="post">
            <br>
            &nbsp;  &nbsp; <input type="submit" value="ON" name="ON">
            <br>
            <br>
            <br>
            &nbsp;  &nbsp; <input type="submit" value="OFF" name="OFF">
</div>
</body>
</html>

<?php
    if(isset($_POST['ON']))
    {
        echo system("python3 /var/www/html/AirplainHeater/PythonScripts/on.py 2>&1");
    }
    if(isset($_POST['OFF']))
    {
        echo system("python3 /var/www/html/AirplainHeater/PythonScripts/off.py 2>&1");
    }
?>