<html>
<head>
    <link rel="stylesheet" href="../static/styles.css" />
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div id="header">
            <h1>Heater Control Page</h1>
            <p><i>Control a heater from the conveinience of your own home!</i></p>
    </div>
    <div class="topnav">
            <a href="../index.html">Home</a>
            <a class="active" href="heater.php">Heater</a>
    </div>
    <div>
        <h2>What would you like to do?</h2>
        <p style="text-align: center; font-size: 120%;"> The ability to control the heater remotely should be helpful in winter months. </p>
        <p style="text-align: center; font-size: 120%;"> Don't worry, all you can control from this page is turning the heater on and off. </p>
        <p style="text-align: center; font-size: 120%;"> The Heater Status Bellow is delayed; refresh the page once to see the real current status. </p>
        <h3 id="heater_status"> Heater Status : 
       
       <?php
            $line = '';

            $f = fopen('../logs/heater_status.txt', 'r');
            $cursor = -1;

            fseek($f, $cursor, SEEK_END);
            $char = fgetc($f);

            /**
             * Trim trailing newline chars of the file
             */
            while ($char === "\n" || $char === "\r") {
                fseek($f, $cursor--, SEEK_END);
                $char = fgetc($f);
            }

            /**
             * Read until the start of file or first newline char
             */
            while ($char !== false && $char !== "\n" && $char !== "\r") {
                /**
                 * Prepend the new char
                 */
                $line = $char . $line;
                fseek($f, $cursor--, SEEK_END);
                $char = fgetc($f);
            }

            echo $line;
        ?></h3>

            <!-- <div><p><?php include('myFile.txt'); ?></p></div> -->
            <form method="post" style="text-align: center;">
                <br>
                &nbsp;  &nbsp; <input type="submit" value="ON" name="ON" class="onButton">
                <br>
                <br>
                <br>
                &nbsp;  &nbsp; <input type="submit" value="OFF" name="OFF" class="offButton">
            </form>
            <br>
            <br>
            &nbsp;  &nbsp; <a class = "tempButton" style="text-align: center;" href="chart.php">View Todays Temperature Chart</a>
    </div>
    <address class="footer">
            Written by Rob Chase.<br>
            For his Dad <br>
            To heat the Airplane <br>
            For Tech Support, Call 802-393-7535<br>
    </address>
</body>
</html>

<?php
    if(isset($_POST['ON']))
    {
        echo system("python3 /var/www/AirplainHeater/PythonScripts/on.py 2>&1");
    }
    if(isset($_POST['OFF']))
    {
        echo system("python3 /var/www/AirplainHeater/PythonScripts/off.py 2>&1");
    }
?>
<!-- <div><p><?php include('myFile.txt'); ?></p></div> -->
