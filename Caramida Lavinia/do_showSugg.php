<?php
$conn = mysqli_connect('localhost', 'root', '', 'baza_proiect');
include "do_addSuggest.php";
$afisare=mysql_query("SELECT * FROM suggest_posts");
echo "<table border=2>";
echo "<tr><td>ID</td><td>Text</td><td>Tipul</td><td>Data</td><td>Email</td></tr>";
while ($row=mysql_fetch_row($afisare)) {
echo "<tr><<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
}
echo "</table>";
mysql_close($conexiune);
?>
