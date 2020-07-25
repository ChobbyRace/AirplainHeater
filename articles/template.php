<html>
<head>
    <link rel="stylesheet" href="../static/styles.css" />
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

        <div id="header">
            <h1>N95VT Home Page</h1>
            <p><i>Insert Catchphrase here</i></p>
        </div>
        <div class="topnav">
            <a  href="index.html">Home</a>
            <a href="templates/heater.php">Heater</a>
            <a class="active" href="templates/blog.html">Blog</a>
            <a href="templates/about.html">About</a>
        </div>
        
        <?php
        $myfile = fopen("article/file.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("article/file.txt"));
        fclose($myfile);
        ?>