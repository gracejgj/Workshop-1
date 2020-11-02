<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	$password=md5($password);
	

	$dbc=mysqli_connect('localhost','root','','florist') or die("Cannot connect to Database ");
	$query="SELECT * FROM tbl_user WHERE email='".$username."' AND password='".$password."' ";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$username;		
	}
	else
	{
		echo '<script type="text/javascript"> alert("Wrong password or email");
		location="login.php";
		</script>';
	}
}

if(isset($_SESSION['username'])){

	$uname=$_SESSION['username'];
	if($uname=='admin@example.com'){
	header("Location: admin/admin.php");
	}
	else
	header("Location: index.php");
}
function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>