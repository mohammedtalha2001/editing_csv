
<?php

$fileName = "contact_data.csv";
echo "<table> \n\n";
$f = fopen($fileName, "r");
$linenum='';
$i = 1;
while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo " <td> " . htmlspecialchars($cell) . " </td> ";
    }
    echo "<td><a href=\"delete.php?lineNum=$i\">Delete</a></td>";
    echo "<td>$i</td>";


    echo "</tr>\n";
    $i++;
}
fclose($f);
echo "\n</table>";



// the line to delete
// $lineNum = $_GET["lineNum"];


    
    ?>