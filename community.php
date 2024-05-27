<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">> 
    <title>Community</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: green;
            margin: -29px;
        }

        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header .profile-logo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #ddd;
            margin-bottom: 10px;
        }

        header h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 800;
            margin: 0;
        }

        section {
            width: 1100px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: lightgray;
            min-height: 100vh;
            overflow-y: auto;
            margin-left: 135px;
        }

        .content-section {
            margin-bottom: 40px;
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


        .content-section {
            display: flex;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .left-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .left-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        h2{
            text-align: center;
            font-family: serif;
        }
        p{
            font-family: serif;
        }

        .right-content {
            flex: 2;
            display: flex;
            flex-direction: column;
            padding-left: 20px;
        }

        .image-with-description {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .image-with-description img {
            max-width: 50%;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .image-with-description p {
            font-size: 1.2em;
            color: #333;
        }

        .conversations-activities {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .conversations-activities h3 {
            margin-top: 0;
            color: #444;
        }

        .conversation p {
            margin: 5px 0;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .conversations-activities ul {
            list-style-type: disc;
            padding-left: 20px;
            color: #444;
        }

        .conversations-activities li {
            margin: 5px 0;
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
        <div> 
            <h2>Community Participation</h2>
        </div>
        <div id="community-participation" class="content-section">
            <div class="left-image">
                <img src="img/compar.png" alt="community-logo">
            </div>
            <div class="right-content">
                <div class="image-with-description">
                    <img src="img/participation.png" alt="community-event">
                    <p>Join our community event to help clean local parks and educate others on the importance of maintaining a green environment. Everyone is welcome!</p>
                </div>
                <div class="conversations-activities">
                    <h3>Conversations</h3>
                    <div class="conversation">
                        <p><strong>Jhon:</strong> I'm excited about the upcoming event!</p>
                        <p><strong>Juan:</strong> Me too! It's going to be a great way to give back to our community.</p>
                    </div>
                    <h3>Activities</h3>
                    <ul>
                        <li>Park Clean-Up</li>
                        <li>Tree Planting</li>
                        <li>Environmental Workshops</li>
                        <li>Beach Clean Ups</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
