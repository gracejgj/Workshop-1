	<!DOCTYPE html>
	<html>
	<head>
	<title>Admin Login | Belle Florist</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	</head>
	
	
	<body>	
		<div class="main-content">
  
        <form class="form-login" method="post" action="login2.php">
            <div class="form-email">
                <div class="form-background">

                    <div class="form-title">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit" >Log in</button>
					<br><center><a class="w3-button w3-white w3-border w3-round-large" href="../index.php" role="button" >BFMS</a></center>	
                    </div>
					
                </div>     
            </div>
        </form>
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