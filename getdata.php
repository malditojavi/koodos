<?php 

mysql_connect('localhost', 'root', 'root');
mysql_select_db('employees');

// Db! Take a look to your data and grab them.
$order = "SELECT * FROM employees ORDER BY name";
// Put ALL of them where I am telling you to put them.
$result = mysql_query($order);
// While there are results, show them in rows.
echo "<table>";

while ($data = mysql_fetch_assoc($result)){

  echo("<tr><td>Koodos to <b>{$data["name"]}</b></td><td> for {$data["address"]}.</td></tr>");

}

echo "</table>";

?>