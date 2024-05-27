<?php
require('utils/saver.php');
session_start();

if (session_is_valid()) {
    header('Location: index.php');
}

// Check if creds are complete
if (
        isset($_POST['username'])
        && isset($_POST['password'])
        && isset($_POST['password1'])
        && isset($_POST['name'])) {
        
    if ($_POST['password'] != $_POST['password1']) {
        header('Location: ?passwordsnotmatched');
        exit;
    }

    if (add_user($_POST['name'], $_POST['username'], $_POST['password'])) {
        header('Location: index.php');
    } else {
        header('Location: ?usernametaken');
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
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70%;
            margin: 0;
            padding: 5px;
            background-image: url('img/back.png');
            background-size:cover;
            background-repeat: no-repeat;
        
        }

        .middle-form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .cont {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .logo img {
            width: 100px;
            margin-bottom: 0;
        }

        .inputs h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-field {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-field span {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .input-field input {
            width: calc(104% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .input-field input:focus {
            border-color: #66afe9;
            outline: none;
            box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
        }

        .w3-text-red {
            color: #e74c3c;
            margin-bottom: 15px;
        }

        .right-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .right-buttons a, .right-buttons input[type="submit"] {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .right-buttons a {
            background-color: #3498db;
        }

        .right-buttons a:hover {
            background-color: #2980b9;
        }

        .right-buttons input[type="submit"] {
            background-color: #2ecc71;
        }

        .right-buttons input[type="submit"]:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <div class='middle-form'>
        <form class='cont' method="POST">
            <div class="logo">
                <img src="img/user-logo.png">
            </div>
            <div class="inputs">
                <h2>Sign up</h2>
                <div class="input-field">
                    <span>Name:</span>
                    <input type="text" name="name" required>
                </div>
                <div class="input-field">
                    <span>Username:</span>
                    <input type="text" name="username" required>
                </div>
                <div class="input-field">
                    <span>Password:</span>
                    <input type="password" name="password" required>
                </div>
                <div class="input-field">
                    <span>Confirm Password:</span>
                    <input type="password" name="password1" required>
                </div>
                <?php
                    if (isset($_GET['passwordsnotmatched'])) {
                        ?> <div class="w3-text-red">Passwords didn't match.</div> <?php
                    }
                    if (isset($_GET['usernametaken'])) {
                        ?> <div class="w3-text-red">Username is already registered.</div> <?php
                    }
                ?>
            </div>
            <div class="right-buttons">
                <a href="login.php" class="w3-button w3-border">Login</a>
                <input type="submit" class="w3-button w3-green" value="Register">
            </div>
        </form>
    </div>
</body>
</html>