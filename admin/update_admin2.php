<?php

include 'session.php';

if(isset($_POST['submit']))
{
	$p_id = $_GET['pid'];
	$name = $_POST['adminname'];
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	
	$sql = "update tbl_admin set adminname = '$name', email = '$mail', password = '$pass' where admin_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Product has been updated.");
			window.location.href = "admin.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to update.");
			window.location.href = "update_admin.php?pid=<?php echo $p_id; ?>";
		</script>
		<?php
	}
}
?>