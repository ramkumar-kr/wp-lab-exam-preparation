<!DOCTYPE html>
<?php 
		session_start();
	if(!isset($_SESSION['uname']))
	{
		header('Location: login.html');
	}
	$uname=$_SESSION['uname'];
	$fdbk = $_POST['fdbk'];
	str_replace("'","\'",$fdbk);
	print_r($fdbk);
	
		$con = mysqli_connect("localhost","root","","guestbook");
		$res = mysqli_query($con,"insert into feedback values('$uname','$fdbk');");
	echo 'Your response has been recorded. Please wait as we redirect you back to the feedback page...';
		header('Refresh: 5; URL=http://localhost/wp-lab-exam-preparation/sixth/feedback.php');

?>

