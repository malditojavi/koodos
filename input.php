<?php 

//Connect with the db
mysql_connect('localhost', 'root', 'root');
//Connect with the table in that db
mysql_select_db('koodos');

//input happy_users

if (isset($_POST['user_name']) && isset($_POST['user_feedback'])) {
	$user_name = $_POST['user_name'];
	$user_feedback = $_POST['user_feedback'];


	//inserting data order
	$order = "INSERT INTO happy_users (user_name, user_feedback) VALUES ('$user_name','$user_feedback')";

	$result = mysql_query($order);
}

//input kooals_visits

if(isset($_POST['koals_visits'])) { echo 'TEST';
	$koals_visits = $_POST ['kaols_visits'];
	
	$order = "INSERT INTO koals_visits (koals_visits) VALUES ('$koals_visits')";

	$result = mysql_query($order);
}

//input koodos_someone

if(isset($_POST['someone_name']) && isset($_POST['someone_reason'])) { 
	$someone_name = $_POST ['someone_name'];
	$user_feedback = $_POST['someone_feedback'];

	$order = "INSERT INTO koodos_someone (someone_name, someone_reason) VALUES ('$someone_name', '$someone_reason')";

	$result = mysql_query($order);
}

//input koodos_team

if(isset($_POST['team_name']) && isset($_POST['team_reason'])) { 
	$someone_name = $_POST ['team_name'];
	$user_feedback = $_POST['team_feedback'];

	$order = "INSERT INTO koodos_team (team_name, team_reason) VALUES ('$team_name', '$team_reason')";

	$result = mysql_query($order);
}

//input kooals_hard

if(isset($_POST['someone_name']) && isset($_POST['someone_reason'])) { echo 'TEST';
	$someone_name = $_POST ['someone_name'];
	$user_feedback = $_POST['someone_feedback'];

	$order = "INSERT INTO koodos_someone (someone_name, someone_feedback) VALUES ('$someone_name', '$someone_reason')";

	$result = mysql_query($order);
}

//SELECT * FROM kooals_visits ORDER BY kooals_visits.number DESC LIMIT 1

//input kooals_paidusers

if(isset($_POST['someone_name']) && isset($_POST['someone_reason'])) { echo 'TEST';
	$someone_name = $_POST ['someone_name'];
	$user_feedback = $_POST['someone_feedback'];

	$order = "INSERT INTO koodos_someone (someone_name, someone_feedback) VALUES ('$someone_name', '$someone_reason')";

	$result = mysql_query($order);
}

//input kooals_trials

if(isset($_POST['someone_name']) && isset($_POST['someone_reason'])) { echo 'TEST';
	$someone_name = $_POST ['someone_name'];
	$user_feedback = $_POST['someone_feedback'];

	$order = "INSERT INTO koodos_someone (someone_name, someone_feedback) VALUES ('$someone_name', '$someone_reason')";

	$result = mysql_query($order);
}

