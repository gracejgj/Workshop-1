<?php

$connect = mysqli_connect('localhost','root','Jgracej9306__','florist');

if (isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "select * from tbl_customer where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_array($result);
	
	if (isset($rows['user_id']))
	
{
	session_start();
	$_SESSION['user_id'] = $rows ['user_id'];
	
			?>
			<script>
			alert('Success');
			window.location.href = "index.php";
			</script>
			<?php  
}

	else
	{
	?>
			<script>
			alert('Failed to login');
			window.location.href = "login.php";
			</script>
			<?php	
	}
}

?>