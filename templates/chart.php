<html><head>
	<link rel="stylesheet" href="../static/chart.css" />
<head>
<h1 id="p00">Temperature over the past 24 hours</h1>
<br><br>
<?php
echo "<html><body id='p00'><table>\n\n";
$f = fopen("../PythonScripts/cpu_temp.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
<div id="p00">
	<br>
	<h1> Test ending </h1>
</div>
<div id="p00">
<address id="end">
    Written by Rob Chase.<br>
    For his Dad <br>
    To heat the Airplane <br>
    For Tech Support, Call 802-393-7535<br>
</address>
</div>
