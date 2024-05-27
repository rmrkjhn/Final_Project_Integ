<?php
require('utils/saver.php');
session_start();

if (!session_is_valid()) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Home</title>
    <style>
        nav {
            margin-top: 10px;
            margin-right: 20px;
            letter-spacing: 2.5px;
            padding: 0.1px;
            width: 960px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 100px;
            margin-left: 130px;
            font-weight: bold;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            font-size: 16px;
            color: black;
        }

        nav ul li a:hover {
            text-decoration:none;
            color: lightgreen;
        }
        hr{
            border: none; 
            height: 3px; 
            background-color: #000; /
           
        }
        p{
            font-family: serif;
            font-size: 17px;
        }
        aside {
            width: 24%;
            height: 100%;
            box-sizing: border-box;
            background-color: white;
            position: fixed;
        }

        aside .profile {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        aside .profile img {
            width: 140px;
            height: 140px;
        }
        aside .profile h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 800;
        }
        aside .summary {
            padding: 20px;
            text-align: center;
        }

        section {
            margin-left: 25%;
            width: 75;
            height: 100%;
            box-sizing: border-box;
            padding: 20px;
        }

        .blog-posts {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: start;
        }
        .post-cont {
            padding: 20px;
        }
        .post {
            text-decoration: none;
        }
        .post img {
            width: 250px;
            height: 200px;
            object-fit: cover;
        }
        .post .caption {
            width: 250px;
            text-align: center;
            font-weight: bold;
            padding: 10px 6px;
        }
    </style>
</head>
<body style="background-image: url('img/backround.png'); background-size:cover; background-repeat: no-repeat; ">
    <aside>
        <div class="profile">
            <img src="img/user-logo.png">
            
            <h1>@<?php echo $_SESSION['username']; ?></h1>
        </div>
        <div class="summary">
            <h3><?php echo $_SESSION['name']; ?></h3>
            <p>Welcome to Organizing Local Communities in Marinduque to Promote Environmental Preservation System!<br>
            We are delighted to have you join us in this crucial initiative. Our mission is to unite the vibrant communities of Marinduque in a
            collective effort to preserve and enhance our beautiful natural environment.</p>
            <p>
                <a href="logout.php" class="w3-button w3-green">Logout</a>
            </p>
        </div>
    </aside>
    <section>
        <?php include_once('components/header.php'); ?>
        <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="service.php">Service</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <hr></hr>
        <div class="blog-posts">
            <div class="post-cont">
                <a href="educational.php" class="post">
                    <div>
                        <img src="img/edu.png">
                    </div>
                    <div class="caption">
                        Educational Resources
                    </div>
                </a>
            </div>
            <div class="post-cont">
                <a href="report.php" class="post">
                    <div>
                        <img src="img/rport.png">
                    </div>
                    <div class="caption">
                        Report and Track Environmental Issues
                    </div>
                </a>
            </div>
            <div class="post-cont">
                <a href="community.php" class="post">
                    <div>
                        <img src="img/com.png">
                    </div>
                    <div class="caption">
                        Community Participation
                    </div>
                </a>
            </div>
            <div class="post-cont">
                <a href="maping.php" class="post">
                    <div>
                        <img src="img/mapa.png">
                    </div>
                    <div class="caption">
                        Interactive Mapping
                    </div>
                </a>
            </div>
            <div class="post-cont">
                <a href="task.php" class="post">
                    <div>
                        <img src="img/task.png">
                    </div>
                    <div class="caption">
                        Task Assignment and Tracking
                    </div>
                </a>
            </div>
            <div class="post-cont">
                <a href="reward_system.php" class="post">
                    <div>
                        <img src="img/reward.png">
                    </div>
                    <div class="caption">
                       Reward System
                    </div>
                </a>
            </div>
            <div class="post-cont">
                <a href="data_analysis.php" class="post">
                    <div>
                        <img src="img/data.jpg">
                    </div>
                    <div class="caption">
                       Data Analysis and Reporting
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>
</html>