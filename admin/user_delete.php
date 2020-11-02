<?php
$connect = mysqli_connect("localhost", "root", "", "florist");

if(isset($_GET['uid']))
{
	$use_id = $_GET['uid'];
	
	$sql = "delete from tbl_customer where user_id = '$use_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("User has been deleted.");
			window.location.href = "user.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Failed to delete.");
			window.location.href = "user.php";
		</script>
		<?php
	}
}
?>