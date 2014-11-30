<!DOCTYPE html>
<?php 
		session_start();
	if(isset($_SESSION['uname']))
	{
		header('Location: feedback.php');
	}
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$pass = $_POST['pass'];
$pass=md5($pass);
	$con = mysqli_connect("localhost","root","","guestbook");
	$r1 = $res = mysqli_query($con,"select * from login where uname = '$uname' or email='$uemail';");
	if(mysqli_num_rows($r1) > 0){
		echo 'Username or email exists. You will br redirected back to the register page in a few seconds...';
		header('Refresh: 5; URL=http://localhost/wp-lab-exam-preparation/sixth/register.html');
	}
		$res = mysqli_query($con,"insert into login values('$uname','$pass','$uemail');");
		header('Location: login.html');

?>

