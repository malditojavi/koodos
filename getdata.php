<?php 

mysql_connect('localhost', 'root', 'root');
mysql_select_db('koodos');

//function getHappyUsers() {
	// Db! Take a look to your data and grab them.
	$order = "SELECT * FROM happy_users ORDER BY id DESC";
	// Put ALL of them where I am telling you to put them.
	$result = mysql_query($order);
	// While there are results, show them in rows.
	echo "<div class='row'>
				<div class='span6 offset1 text-left'><h4>Happy users</h4>
	";

	while ($data = mysql_fetch_assoc($result)){

	  echo("
	  	
        <p>{$data['user_name']} </p>
	  		<small>{$data['user_feedback']}</small>
      
      ");

	}
	echo "
	
      <div class='span3 offset1 text-right'><h4>Metrics</h4></div>
      </div>
      	<div class='row'>
      	<div class='span3 offset1 text-left'><h4>More metrics</h4></div>
      	<div class='span6 offset1 text-right'><h4>More feedback</h4></div>
      </div>
      
	</div>";
//}

function getKoodosVisits() {
	// Db! Take a look to your data and grab them.
	$order = "SELECT * FROM koals_visits";
	// Put ALL of them where I am telling you to put them.
	$result = mysql_query($order);
	// While there are results, show them in rows.
	echo "<table>";

	while ($data = mysql_fetch_assoc($result)){ echo 'TEST';

	  echo("<tr><td>Koodos to <b>{$data["name"]}</b></td><td> for {$data["address"]}.</td></tr>");

	}

	echo "</table>";
}

function getKoodosTeam() {
	// Db! Take a look to your data and grab them.
	$orderr = "SELECT * FROM koals_hard";
	// Put ALL of them where I am telling you to put them.
	$result = mysql_query($orderr);
	// While there are results, show them in rows.

}

function getKoodosMetrics() {
	// Db! Take a look to your data and grab them.
	$order = "SELECT * FROM koals_hard";
	// Put ALL of them where I am telling you to put them.
	$result = mysql_query($order);
	// While there are results, show them in rows.
	echo "<table>";

	while ($data = mysql_fetch_assoc($result)){

	  echo("<tr><td>Koodos to <b>{$data["name"]}</b></td><td> for {$data["address"]}.</td></tr>");

	}

	echo "</table>";
}

?>