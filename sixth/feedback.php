<!DOCTYPE html>
<?php 
		session_start();
	if(!isset($_SESSION['uname']))
	{
		header('Location: login.html');
	}
?>

<html>
	<head>
		<title>Provide Feedback</title>
<center>		<h2>Provide Feedback</h2></center>
	</head>
	<body><center>
		<form action="storefeedback.php" method="post">
			<table style="border : 1px solid black;">
				<tr>
					<td><label for="fdbk">Feedback</label></td>
					<td><textarea rows="7" cols="60" name="fdbk"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;"><input  type="submit" value="Submit Feedback"/></td>
				</tr>

			</table>
		</form>
		<hr/>
		<button onclick="location.href='logout.php'" style="width : 100px; height : 40px;">Logout</button>
		</center>
	</body>
</html>
