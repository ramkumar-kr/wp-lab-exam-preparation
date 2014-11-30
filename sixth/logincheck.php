<!DOCTYPE html>
<?php 
		session_start();
	if(isset($_SESSION['uname']))
	{
		header('Location: feedback.php');
	}
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$pass=md5($pass);
	$con = mysqli_connect("localhost","root","","guestbook");
	$r1 = $res = mysqli_query($con,"select * from login where uname = '$uname' and password='$pass';");
	if(mysqli_num_rows($r1) > 0){

		$_SESSION['uname']=$uname;
		if($uname == 'admin')
		{
			header('Location: retrievefeedback.php');
		}
		else{
			header('Location: feedback.php');
		}
	}
	else{
		session_destroy();
		echo 'Username or email does not exist. You will br redirected back to the register page in a few seconds...';
		header('Refresh: 5; URL=http://localhost/wp-lab-exam-preparation/sixth/register.html');	
	}
	
?>
