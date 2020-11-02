<?php
	include 'config.php';
	session_start();
	if (!isset($_SESSION['admin_id']))
	{
		?>
        <script>
			alert("You have not login yet");
			window.location.href = "login.php";
		</script>
        <?php
	}
?>