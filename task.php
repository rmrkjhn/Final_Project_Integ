<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css"> 
    <title>Task</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: green;
            display: flex;
        }

        aside {
            width: 250px;
            height: 100vh;
            background-color: green;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        aside header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        header h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 800;
            color: white;
            margin: 0;
        }

        nav.navbar {
            width: 100%;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .navbar a{
            font-family: serif;
        }

        nav.navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
            width: 100%;
            text-align: center;
            border-radius: 5px;
        }

        nav.navbar a:hover {
            background-color: yellowgreen;
        }
        section {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 20px;
            box-sizing: border-box;
            background-color: lightgoldenrodyellow;
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

        .large-image img {
            width: 100%;
            height: 400px;
            margin-top: 30px;
        }

        .large-image h2 {
            text-align: center;
            font-family: 'Times New Roman', serif;
        }
    </style>
</head>
<body>
    <aside>
        <?php include_once('components/header.php'); ?> <br>
        <nav class="navbar">
            <a href="index.php">Home</a><br>
            <a href="#treeplanting">Tree Planting</a><br>
            <br>
            <a href="#beach">Beach Clean Ups</a><br>
            <br>
            <a href="#garbage">Garbage Segregation</a><br>
            <br>
            <a href="#monitor">Monitor</a></br>
        </nav>
    </aside>
    <section>
        <div id="treeplanting" class="content-section">
            <div class="large-image">
                <img src="img/tree.png" alt="under-image1">
                <h2>Tree Planting</h2>
            </div>
        </div>

        <div id="beach" class="content-section">
            <div class="large-image">
                <img src="img/beach.png" alt="under-image1">
                <h2>Beach Clean Ups</h2>
            </div>
        </div>

        <div id="garbage" class="content-section">
            <div class="large-image">
                <img src="img/seg.png" alt="under-image1">
                <h2>Garbage Segregation</h2>
            </div>
        </div>
        
        <div id="monitor" class="content-section">
            <div class="large-image">
                <img src="img/monitor.png" alt="under-image1">
                <h2>Monitor</h2>
            </div>
        </div>
    </section>
</body>
</html>