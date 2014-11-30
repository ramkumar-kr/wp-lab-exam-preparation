<?php 
		session_start();
	if(!isset($_SESSION['uname']))
	{
		header('Location: login.html');
	}
	session_destroy();
	header('Location: login.html');
