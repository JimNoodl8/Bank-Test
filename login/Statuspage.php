<?php 
session_start();

	include("Connection.php");
	include("Functions.php");
    
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Statuspage</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
        <img id="logomid" src="Images/Logo.png" alt="Icon" class="icon" width="326" height="179">
		<div id="rectanglestatus" class="round"></div>
		<a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>
        
		<p id="welcome">Welcome!</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<p id="name"><b><?php echo $user_data['firstlastname']; ?><b></p>
           
        <div>
            <form id="button1" action="Balance.php">
                <input type="submit" value="View Balance">
            </form>
        </div>

        <div>
            <form id="button2" action="Transfer.php">
                <input type="submit" value="Transfer Balance">
            </form>
        </div>

        <div>
            <form id="button3" action="Deposit.php">
                <input type="submit" value="Deposit Check">
            </form>
        </div>

        <div>
            <form id="button4" action="Withdraw.php">
                <input type="submit" value="Withdraw">
            </form>
        </div>

        <div>
            <form id="button5" action="Openbankaccount.php">
                <input type="submit" value="Open Account">
            </form>
        </div>

        <div>
            <form id="button6" action="Closebankaccount.php">
                <input type="submit" value="Close Account">
            </form>
        </div>

        <div>
            <form id="button7" action="logout.php">
                <input type="submit" value="Logout">
            </form>
        </div>

	</body>
</html>