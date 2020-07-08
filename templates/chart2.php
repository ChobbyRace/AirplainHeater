<html><head>
	<link rel="stylesheet" href="../static/chart.css" />
<head>
<h2 id="p00">Temperature over the past 24 hours</h2>

<?php

$row = 1;
if (($handle = fopen("../PythonScripts/cpu_temp.csv", "r")) !== FALSE) {
   
    echo '<table class="f1-table">';
   
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<thead><tr>';
        }else{
            echo '<tr>';
        }
       
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
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
   
    echo '</tbody></table>';
    fclose($handle);
}
?>