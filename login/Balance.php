<?php 
session_start();

	include("Connection.php");
	include("Functions.php");
    
	$user_data = check_login($con);
?>

<html>

    <head>
        <title>Balance</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <style>

        #pin {
        position: absolute;
        left: 980px;
        top: 632px;
        font-family: Arial; 
        color:rgb(20, 27, 100); 
        font-size: 145%;
        }

        #pinbox {
        position: absolute;
        border-radius: 4px;
        border: 1px solid #ccc;
        padding: 8px 15pxpx;
        width: 350px;
        height: 40px;
        left: 749px;
        top: 631px;
        }

        #pintext {
        position: absolute;
        left: 767px;
        top: 637.5px;
        font-family: Helvetica; 
        color: #696969; 
        font-size: 122%;
        }

        #checkroutenum {
        position: absolute;
        left: 871px;
        top: 447.3px;
        font-family: Arial; 
        color:rgb(20, 27, 100); 
        font-size: 145%;
        }

        #checkroutetext {
        position: absolute;
        left: 766.6px;
        top: 451.7px;
        font-family: Helvetica; 
        color: #696969; 
        font-size: 122%;
        }

        

        #checkbalance {
        border: 1px solid #FFFFFF;
        top: 405px;
        }

        #checkroute {
        border: 1px solid #FFFFFF;
        top: 455px;
        }

        #savebalance {
        border: 1px solid #FFFFFF;
        top: 525px;
        }

        #saveroute {
        border: 1px solid #FFFFFF;
        top: 575px;
        }

        #backbalance {
        top: 710px;
        }

        #rectanglebalance {
        position: absolute;
        top: 185px;
        left: 700px;
        width: 450px;
        height: 600px;
        border-radius: 10px;
        background-color: white;
        z-index: -3;
        }

        #checkingbox {
        position: absolute;
        border-radius: 4px;
        border: 1px solid #ccc;
        padding: 8px 15pxpx;
        width: 350px;
        height: 101px;
        left: 749px;
        top: 391px;
        }

        #savingsbox {
        position: absolute;
        border-radius: 4px;
        border: 1px solid #ccc;
        padding: 8px 15pxpx;
        width: 350px;
        height: 101px;
        left: 749px;
        top: 511px;
        }

    </style>

        <img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
        <img id="logomid" src="Images/Logo.png" alt="Icon" class="icon" width="326" height="179">
        <div id="rectanglebalance" class="round"></div>
        <a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>
        <p id="checkingbox"></p>
        <p id="savingsbox"></p>
        <p id="pinbox"></p>

        <div>
            <form id="register" action="Statuspage.php">
                <input type="text" id="checkbalance"  name="username" placeholder="Checking: $">
                <input type="text" id="savebalance"  name="username" placeholder="Savings: $">
                <input type="text" id="saveroute"  name="username" placeholder="Routing: # ">
                <input type="submit" id="backbalance" value="Back">
            </form>
        </div>

        
        <p id="checkroutetext">Routing: #</p>
        <p id="checkroutenum"><?php echo $user_data['checkingroute']; ?></p>

        <p id="pintext">Your 4-Digit Pin: #</p>
        <p id="pin"><?php echo $user_data['pin']; ?></p>

    </body>

</html>