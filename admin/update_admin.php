<!DOCTYPE html>

<?php
	include 'session.php';
	
	$p_id = $_GET['pid'];
	$sql = "select * from tbl_admin where admin_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<body>
	<div id="wrapper">
	
	<div id="content"> <br><br><br>
	
<form action="update_admin2.php?pid=<?php echo $p_id; ?>" method="post">
    <table border="0" width="40%" >
        <tr>
            <td colspan="2" align="center"><h2>UPDATE ADMIN INFO</h2></td>
        </tr>
        <tr>
            <td width="30%" align="right">Admin Name: </td>
            <td width="70%" align="center">
                <input type="text" name="adminname" value="<?php echo $rows['adminname']; ?>" required />
            </td>
        </tr>
        <tr>
            <td width="30%" align="right">Admin Email: </td>
            <td width="70%" align="center">
                <input type="text" name="email" value="<?php echo $rows['email']; ?>" />
            </td>
        </tr>
        <tr>
            <td width="30%" align="right">Admin Password: </td>
            <td width="70%" align="center">
                <input type="password" name="password" value="<?php echo $rows['password']; ?>" required />
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="COMFIRM" class="button button4" name="submit" />
                <input type="reset" value="RESET" class="button button4" name="reset" />
            </td>
        </tr>
    </table>
</form>
	<div id="footer">Copyright <a href="dashboard.php">Belle Florist Admin</a>. All Rights Reserved.</div>
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
	