<?php

$connect = mysqli_connect('localhost','root','','florist');

if (isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "select * from tbl_user where userEmail = '$email' and userPwd = '$password'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_array($result);
	
	if (isset($rows['userID']))
	
{
	session_start();
	$_SESSION['userID'] = $rows ['userID'];
	
	?>
			<script>
			alert('success login');
			window.location.href = "index.php";
			</script>
			<?php  
}

	else
	{
		
	}
}

?>