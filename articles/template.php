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
	$myfile = fopen("file.txt", "r") or die("Unable to open file!");
	// Output one line until end-of-file
	while(!feof($myfile)) {
	 	echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
    ?>
    
    <h1 class="article" :h1> This is a header, do it to make big statements</h1>
    <h3 class="article" :h3> This is a slightly smaller header </h3>
    <p1 class="article" :paragraph> 
        This is a paragraph. We can make things <b>Bold</b>, like this. We make a new line like this.<br>
        We can do italics like <i>this</i>.<br>
        We can insert pictures in line like this <img src="../static/team_pic.JPG" width="33%"/> Look at me, I'm on the other side! <br>
        If you want to tab, add a 
        This is where the meat of the blog info will be input. Is having you write html the best thing ever? <b>No</b>.<br>
        But its something :) <br>
        I'll be working on a better way to get text
        If you need help with writing into html, do a little self study at <a href="https://www.w3schools.com/html/">This Link</a><br>
        Thanks where <i>I</i> learned it, and you can too!
    </p1>
