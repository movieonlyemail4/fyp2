<?php

	// EDIT HERE
	// Server or Host name, Database Username, Database Password, Database Name goes in here
	define ('hostnameorservername','us-cdbr-iron-east-02.cleardb.net');
	define ('serverusername','bd670379ec018c');
	define ('serverpassword','f5da97a0');
	define ('databasenamed','heroku_1ee804d29fa225b');


	// Make connection with database
	global $connection;
	$connection = @mysqli_connect(hostnameorservername,serverusername,serverpassword) or die('1. Connection could not be made to the SQL Server. Please report this system error to admin.');
	@mysqli_select_db($connection, databasenamed) or die('2. Connection could not be made to the database. Please report this system error to admin.');	
?>