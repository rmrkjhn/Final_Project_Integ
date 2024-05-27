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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/educational.css"> 
    <title>Report</title>
    <style>
        body{
            width: auto;
            height: auto;
            background-color: green;
        }
        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 800;
            margin: 0;
        }
        nav {
            margin-top: 0px;
            letter-spacing: 2.5px;
            padding: 0.1px;
            width: 1100px;
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

        p {
            display: flex;
            justify-content: space-around;
            font-family: serif;
            margin-top: 20px;
            font-size: 25px;
        }

        section {
            width: 85%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            min-height: 100vh;
            overflow-y: auto;
        }


        .content-section {
            margin-bottom: 40px;
        }

        .content-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        #map {
            height: 500px; 
            width: 90%;
            margin-top: 20px; 
            margin-left: 50px;
            border: 5px solid white;
            border-radius: 5px;
        }
        hr{
            border: none; 
            height: 3px; 
            background-color: #000; /
        }
    </style>
</head>
<body>
    <section style="background-color: lightyellow;">
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
            <p>Environmental Issues Hotspot</p>
        </div>
        
        <div id="map"></div>
    </section>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
       
        var map = L.map('map').setView([13.3986, 121.9796], 11);

        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        
        var marker = L.marker([13.3986, 121.9796]).addTo(map)
            .bindPopup('<b>Marinduque</b><br>Welcome to Marinduque!')
            .openPopup();

       
        
    </script>
</body>
</html>