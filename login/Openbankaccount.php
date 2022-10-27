<?php 
session_start();

	include("Connection.php");
	include("Functions.php");
    
	$user_data = check_login($con);

?>

<html>

    <head>
        <title>Open Bank Account</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <style>
            #openaccount {
            position: absolute;
            top: 450px;
            }
        </style>

        <img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
        <img id="logomid" src="Images/Logo.png" alt="Icon" class="icon" width="326" height="179">
        <div id="rectanglesmall" class="round"></div>
        <a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>


        <form action="Balance.php" method="post">
            <input id="openaccount"type="submit" name="someAction" value="Open Checking Account" />
        </form>

        <div>
            <form id="backsmall2" action="Statuspage.php">
                <input type="submit" value="Back">
            </form>
        </div>

    </body>

</html>