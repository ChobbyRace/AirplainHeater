<html>
<head>
    <link rel="stylesheet" href="../static/styles.css" />
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div id="header">
            <h1>Heater Temp Page</h1>
            <p><i>Checkout Hanger Temperature!</i></p>
    </div>
    <div class="topnav">
            <a href="../index.html">Home</a>
            <a href="heater.php">Heater</a>
            <a class="active" href="chart.php">Temp Chart</a>
    </div>

    <a class="tempButton" href="../logs">Historical Log Files</a>
    <div class="table-wrapper">
    <table class="fl-table">

    <?php
    $row = 1;
    if (($handle = fopen("../cpu_temp.csv", "r")) !== FALSE) {
    
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            if ($row == 1) {
                echo '<thead><tr>';
            }else{
                echo '<tr>';
            }
        
            for ($c=0; $c < $num; $c++) {
                if(empty($data[$c])) {
                $value = "&nbsp;";
                }else{
                $value = $data[$c];
                }
                if ($row == 1) {
                    echo '<th>'.$value.'</th>';
                }else{
                    echo '<td>'.$value.'</td>';
                }
            }
        
            if ($row == 1) {
                echo '</tr></thead><tbody>';
            }else{
                echo '</tr>';
            }
            $row++;
        }
    
        //echo '</tbody></table>';
        fclose($handle);
    }
    ?>
</tbody></table></div>

<address class="footer">
            Written by Rob Chase.<br>
            For his Dad <br>
            To heat the Airplane <br>
            For Tech Support, Call 802-393-7535<br>
    </address>

</body>

