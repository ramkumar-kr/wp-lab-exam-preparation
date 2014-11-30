<!DOCTYPE html>
<?php 
		session_start();
	if(!isset($_SESSION['uname']) and $_SESSION['uname'] != 'admin')
	{
		header('Location: login.html');
	}
?>
<html>
	<head>
		<title>Provided Feedback</title>
		<center><h2>Provided Feedback</h2></center>
	</head>
	<body>
		<center>
			<table style="border-collapse : collapse;">
<?php 
		$con = mysqli_connect("localhost","root","","guestbook");
		$res = mysqli_query($con,"select * from feedback;");
		while($row = mysqli_fetch_array($res))
		{
			echo '<tr><td style="border : 1px solid black;">';
			echo $row[1];
			echo '</td></tr>';
		}
?>
			</table>
		</center>
		<hr/>
		<button onclick="location.href='logout.php'" style="width : 100px; height : 40px;">Logout</button>
	</body>
</html>
