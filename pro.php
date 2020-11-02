<?php

include 'inc/config.php';

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$sql = "select * from tbl_customer where email = '$email'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
	
	if (isset($rows['email']))
	{
		?>
		<script>
			alert("Please use another email address.");
			window.location.href = "login.php";
		</script>
		<?php
	}
	else
	{
		$sql2 = "insert into  tbl_customer (fname, lname, username, password, email)
		values ('$fname', '$lname','$username','$password','$email')";
		$result2 = mysqli_query($connect, $sql2);
		
		if($result2)
		{
			//header("Location: index.php");
			?>
			<script>
				alert("Account has been created.");
				window.location.href = "account.php";
			</script>
			<?php
		}
	}
}
?>