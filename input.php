<?php 
//the example of inserting data with variable from HTML form
//input.php
mysql_connect('localhost', 'root', 'root');
mysql_select_db('employees');

if (isset($_POST['name']) && isset($_POST['address'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];


	//inserting data order
	$order = "INSERT INTO employees (name, address) VALUES ('$name','$address')";

	$result = mysql_query($order);

	if($result) {
  	echo "yes!" ;
	} 
	else {
	  echo "no!" ;
	}
}

?>