<?php

$connect = mysqli_connect("localhost", "root", "Jgracej9306__", "florist");
if (isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "select * from tbl_admin where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_array($result);
	
	if (isset($rows['admin_id']))
	
	{
		session_start();
		$_SESSION['admin_id'] = $rows ['admin_id'];	
		?>
				<script>
				alert('success login');
				window.location.href = "dashboard.php";
				</script>
				<?php  
	}
}
	else
	{		
			?>
			<script>
			alert('Failed to LOGIN');
			window.location.href = "login.php";
			</script>
			<?php 	
	}
?>