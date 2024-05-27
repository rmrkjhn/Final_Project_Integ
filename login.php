<?php
require('utils/saver.php');
session_start();

if (session_is_valid()) {
    header('Location: index.php');
}

// Check if creds are complete
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // Try to login
    if (try_login($_POST['username'], $_POST['password'])) {
        header('Location: index.php');
    } else {
        header('Location: ?error');
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Login</title>
    <style>
        body{
            background-image: url('img/back.png');
            background-size:cover;
            background-repeat: no-repeat;
        }
        .middle-form {
            height: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: lightgray;
            position: absolute;
            top: 0;
            right: 0;
            width: calc(82% - 50%);
            margin-right: 60px;
            margin-top: 100px;
            border-radius: 30px;
            backdrop-filter: blur(50px);
        }
        
        .middle-form .cont {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 500px;
        }
        .middle-form .cont > div {
            width: 90%;
        }

        .middle-form .logo {
            display: flex;
            justify-content: center;
        }
        .middle-form .logo img {
            width: 120px;
            height: 120px;
            margin-left: 40px;
        }

        .middle-form .right-buttons {
            display: flex;
            justify-content: end;
        }
        .middle-form .right-buttons .w3-button {
            margin-left: 8px;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            margin: 20px 0px;
            width: 90%;
            margin-left: 40px;
        }
        .input-field span {
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            font-weight: bolder;
        }
        .input-field input {
            border: none;
            background-color: rgb(236, 236, 236);
            height: 35px;
        }
        h2{
            margin-left: 40px;
        }
        h1{
            padding-left: 30px;
	        padding-top: 140px;
            font-size: 38px;
	        font-family: garamond;
	        letter-spacing: 1.2px;
	        line-height: 50px;
            color: white;
        }
        .organization, .par{
	        padding-left: 30px;
	        padding-bottom: 30px;
	        font-family: sans-serif;
	        letter-spacing: 1px;
	        line-height: 25px;
            font-size: 15px;
        }
        .par{
            color: white;
            font-family: garamond;
            font-size: 19px;
            text-align: justify;
        }
        .cn{
	        background: #4CBB17;
	        border: none;
	        margin-top: -40px;
	        margin-left: 30px;
	        font-size: 18px;
	        border-radius: 50px;
	        cursor: pointer;
	        transition: .4s ease;
            padding: 10px;
            height: 40px;
        }
        .organization rem{
	        color: lightgreen;
	        font-size: 45px;
            font-family: garamond;
        }
        .cn a{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="organization">
		<h1>Organizing Local Communities in Marinduque<br><rem>To Promote Environmental</rem><br>Preservation System</h1><br>
		<p class="par">Organizing local communities in Marinduque aims to mobilize residents towards <br>environmental preservation through education and collaborative efforts. By fostering <br>grassroots initiatives, we can protect Marinduque's natural beauty and biodiversity <br> for future generations.</p>
		<button class="cn"><a href="register.php">Get Started</a></button>
    </div>
    <div class='middle-form'>
        <form class='cont' method="POST">
            <div class="logo">
                <img src="img/user-logo.png">
            </div>
            <div class="inputs">
                <h2>Sign in</h2>
                <div class="input-field">
                    <span>Username:</span>
                    <input type="text" name="username" required>
                </div>
                <div class="input-field">
                    <span>Password:</span>
                    <input type="password" name="password" required>
                </div>
                <?php
                    if (isset($_GET['error'])) {
                        ?> <div class="w3-text-red" style="margin-left: 50px;">Account does not exist.</div> <?php
                    }
                ?>
            </div>
            <div class="right-buttons">
                <a href="register.php" class="w3-button w3-border">Register</a>
                <input type="submit" class="w3-button w3-green" value="Login">
            </div>
        </form>
    </div>
</body>
</html>