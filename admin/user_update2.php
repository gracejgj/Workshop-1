<?php

include 'session.php';

if(isset($_POST['submit']))
{
	$p_id = $_GET['pid'];
	$fnme = $_POST['fname'];
	$lnme = $_POST['lname'];
	$add = $_POST['address'];
	$dist = $_POST['district'];
	$post = $_POST['postcode'];
	$pone = $_POST['phone'];
	$mail = $_POST['email'];
	$pwd = $_POST['password'];
	
	$sql = "update tbl_customer set fname = '$fnme',
	lname = '$lnme', address = '$add', district = '$dist',
	postcode = '$post', phone = '$pone', email = '$mail',
	password = '$pwd' where user_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("User has been updated.");
			window.location.href = "user.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to update.");
			window.location.href = "user_update.php?pid=<?php echo $p_id; ?>";
		</script>
		<?php
	}
}
?>