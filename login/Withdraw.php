<html>

    <head>
        <title>Withdraw</title>
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

            input[type=text], select {
            left: 750px;
            font-size: 20px;
            width: 350px;
            padding: 8px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            position: absolute;
            top: 515px;
            left: 750px;
            font-size: 20px;
            width: 350px;
            color: white;
            padding: 10px 15px ;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: rgb(20, 27, 100);
            }

        </style>

        <img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
        <img id="logomid" src="Images/Logo.png" alt="Icon" class="icon" width="326" height="179">
        <div id="rectanglesmall" class="round"></div>
        <a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>

        <div>
            <form id="register" action="Statuspage.php">
                <input type="text" id="transfer" name="transfer" placeholder="Amount: $ ">                
                <input type="text" id="toAccount" name="toAccount" placeholder="Insert Pin: # ">
                <input type="submit" value="Done">
            </form>
            </form>
        </div>

    </body>

</html>