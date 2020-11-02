<!DOCTYPE html>
<html>

<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div id="wrapper">
<?php include 'inc/header.php';?>
 
  <div id="content"> 
	<br><br>
	<h2 style="align:center">UPDATE ADMIN DETAIL</h2>
	<br>
	
		<?php
		$connect = mysqli_connect("localhost", "root", "Jgracej9306__", "florist");
		$sql = "select * from tbl_admin";
		$result = mysqli_query($connect,$sql);
		
		while($rows = mysqli_fetch_array($result))
		{
			?>
		
	
			<p > <?php echo $rows['adminname']; ?></p> 
			<br>
			<p> <?php echo $rows['email']; ?></p>
			<br>
			<p> <?php echo $rows['password']; ?></p>
			<br>
			
	<p style="flex-direction:column">
		<a href="update_admin.php?pid=<?php echo $rows['admin_id']; ?>"><input type="submit"  class="button button4"  value="UPDATE" /></a>
	</p></br>

  <?php
		}
	?>
	
	 </div>	
	 
  <div id="footer">Copyright <a href="dashboard.php">Belle Florist Admin</a>. All Rights Reserved. </div>
  <script type="text/JavaScript">
//Script courtesy of BoogieJack.com
var message="NoRightClicking";
function defeatIE() {if (document.all) {(message);return false;}}
function defeatNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
document.oncontextmenu=new Function("return false")
</script>
</div>
</body>
</html>