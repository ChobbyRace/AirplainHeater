<html><head>
    <link rel="stylesheet" href="../static/chart.css" />
<head>
<h2>Todays Temperature Chart</h2>
&nbsp;  &nbsp; <a class="tempButton" style="text-align: center;" href="../logs">Historical Log Files</a>
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
