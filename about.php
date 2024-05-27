<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>About Us of Marinduque Preservation</title>
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
        }
        h1, h2 {
            color: green;
            font-family:serif;
        }
        p {
            line-height: 1.6;
            text-align: justify;
            font-family:serif;
            font-size: large;
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
            <h2>Our Mission</h2>
            <p>Organizing Local Communitiesin Marinduqueto Promote Environmental Preservation System, our mission is to 
                empower and mobilize local communities in Marinduque to actively participate in environmental 
                preservation efforts. We are committed to fostering a sense of environmental stewardship and 
                collective responsibility towards the conservation of Marinduque's natural resources.</p>
            <h2>Our Vision</h2>
            <p>We envision a future where every resident of Marinduque is actively engaged in protecting and 
                preserving the island's unique environment. Through collaborative efforts and community-driven
                 initiatives, we aim to create a sustainable and resilient ecosystem that supports both people 
                 and nature.</p>
            <h2>Our Values</h2>
            <ul>
                <li><strong>Environmental Stewardship:</strong> We are committed to being responsible stewards of Marinduque's natural resources.</li>
                <li><strong>Community Engagement:</strong> We believe in the power of community engagement and collaboration to achieve our conservation goals.</li>
                <li><strong>Sustainability:</strong> We promote sustainable practices that balance environmental, social, and economic considerations.</li>
                <li><strong>Educational Outreach:</strong> We provide educational programs and resources to raise awareness and inspire action for environmental conservation.</li>
            </ul>
            <h2>Join Us</h2>
            <p>Whether you're a local resident, a visitor, or a supporter from afar, there are many ways to get involved with Marinduque Preservation Service. Together, we can make a difference and ensure a brighter, greener future for Marinduque and its inhabitants.</p>
    </div>
</body>
</html>
