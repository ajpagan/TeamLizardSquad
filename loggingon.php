<?php

session_start(); //starting the session

if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($_POST['username']) || empty($_POST['password']))
	{
		$error = "Username or Password invalid";
	}

}

?>
