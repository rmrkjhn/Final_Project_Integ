<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Reward System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: green;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav {
            margin-top: 0px;
            letter-spacing: 2.5px;
            padding: 0.1px;
            margin-bottom: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 160px;
            margin-left: 120px;
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
            background-color: #000;  
        }
        h2{
            font-family: serif;
        }

        section {
            padding: 20px;
            max-width: 1100px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2em;
            color: #333;
            max-width: 800px;
        }

        .rewards-list {
            text-align: left;
            width: 100%;
        }

        .rewards-list h3 {
            font-size: 1.5em;
            color: #4CAF50;
        }

        .rewards-list ul {
            list-style-type: none;
            padding: 0;
        }

        .rewards-list ul li {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .rewards-list ul li span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <section style="background-color: lightgoldenrodyellow;">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <hr></hr>
        <?php include_once('components/header.php'); ?>
        <div class="content">
            <h2>Welcome to the Environmental Rewards System</h2>
            <p>Participate in our environmental activities and earn points! Redeem these points for exciting rewards. Our program encourages active engagement and helps foster a greener community.</p>
            <div class="rewards-list">
                <h3>Rewards System</h3>
                <ul>
                    <li><span>Road Cleaning:</span> 50 points</li>
                    <li><span>Tree Planting:</span> 75 points</li>
                    <li><span>Recycling :</span> 30 points</li>
                    <li><span>Environmental Workshop:</span> 40 points</li>
                    <li><span>Beach Cleaning:</span> 60 points</li>
                </ul>
                <h3>Redeem Your Points</h3>
                <ul>
                    <li><span>Eco-Friendly Merchandise:</span> 100 points</li>
                    <li><span>Gift Vouchers:</span> 200 points</li>
                    <li><span>Special Event Invitations:</span> 150 points</li>
                    <li><span>Exclusive Workshops:</span> 120 points</li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>
