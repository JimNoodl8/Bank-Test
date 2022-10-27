<html>

    <head>
        <title>Deposit</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <style>
            #transfer {
            position: absolute;
            top:395px;
            }

            #toAccount {
            position: absolute;
            top:455px;
            }

            #rectangle {
            position: absolute;
            top: 185px;
            left: 700px;
            width: 450px;
            height: 410px;
            border-radius: 10px;
            background-color: white;
            z-index: -1;
            }

        </style>

        <img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
        <img id="logomid" src="Images/Logo.png" alt="Icon" class="icon" width="326" height="179">
        <div id="rectanglemid" class="round"></div>
        <a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>

        <div>
            <form id="register" action="Statuspage.php">
                <input type="text" id="transfer" name="transfer" placeholder="Placeholder: ">                
                <input type="text" id="toAccount" name="toAccount" placeholder="Placeholder: ">
                <input type="submit" id="donemid" value="Done">
                <input type="submit" id="backmid" value="Back">
            </form>
            </form>
        </div>

    </body>

</html>