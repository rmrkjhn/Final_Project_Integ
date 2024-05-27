<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">>
    <title>Marinduque Preservation Service</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: green;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
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
            color: green;
        }
        hr{
            border: none; 
            height: 3px; 
            background-color: #000;  
        }
        .content {
            padding: 20px;
            max-width: 1100px;
            margin: 0 auto;
            background-color: lightgoldenrodyellow;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: -23px;
        }
        h1, h2 {
            color: green;
        }
        p {
            line-height: 1.6;
            text-align: justify;
        }
        
    </style>
</head>
<body>
    <div class="content">
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
        <h2>Preserving Marinduque's Natural Beauty</h2>
        <p>Marinduque, known for its stunning landscapes and rich biodiversity, is a gem of the Philippines. However, like many other natural habitats, it faces threats from environmental degradation and human activity. At Marinduque Preservation Service, we are dedicated to conserving and protecting the natural beauty of Marinduque for future generations.</p>
        <h2>Our Services</h2>
        <h3>1. Coastal Clean-Up</h3>
        <p>Join us in cleaning up the coastlines of Marinduque to preserve marine life and ensure clean and healthy beaches for locals and tourists.</p>
        <h3>2. Reforestation Projects</h3>
        <p>Participate in our tree-planting initiatives to restore deforested areas, enhance biodiversity, and mitigate the effects of climate change.</p>
        <h3>3. Environmental Education</h3>
        <p>Attend our workshops and seminars to learn about the importance of environmental conservation and sustainable practices for a greener Marinduque.</p>
        <h3>4. Waste Management Programs</h3>
        <p>Get involved in our waste management programs to promote recycling, reduce pollution, and keep Marinduque's ecosystems clean and healthy.</p>
        <h2>Get Involved</h2>
        <p>Whether you're a resident of Marinduque or a visitor who cares about preserving its natural beauty, there are many ways to get involved with Marinduque Preservation Service. Join us in our efforts to protect and conserve Marinduque's environment for generations to come.</p>
    </div>
</body>
</html>
