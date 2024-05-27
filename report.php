<?php
require('utils/saver.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Function to delete an issue by its timestamp
function deleteIssue($timestamp) {
    $filename = 'data/reports.xml';
    $file = simplexml_load_file($filename);
    foreach ($file->report as $report) {
        if ($report->date == $timestamp) {
            $dom = dom_import_simplexml($report);
            $dom->parentNode->removeChild($dom);
            save($file, $filename);
            return true;
        }
    }
    return false;
}

// Check if a delete request was made
if (isset($_GET['delete'])) {
    deleteIssue($_GET['delete']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    add_report($_POST['title'], $_POST['description'], date('Y-m-d H:i:s'));
    $notification = "Issue submitted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Environmental Issues Report</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
        hr{
            border: none; 
            height: 5px; 
            background-color: #000; 
        }

        section {
            width: 85%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: lightgoldenrodyellow;
            min-height: 100vh;
            overflow-y: auto;
        }
        hr{
            border: none; 
            height: 3px; 
            background-color: #000; /
        }

        .content-section {
            margin-bottom: 40px;
        }

        .content-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .report-form {
            margin-bottom: 40px;
        }

        .report-form form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .report-form label {
            font-weight: bold;
        }

        .report-form input, .report-form textarea {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        .report-form button {
            padding: 10px;
            font-size: 16px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .report-form button:hover {
            background-color: yellowgreen;
        }

        .issues-list {
            margin-top: 20px;
        }

        .issue {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .issue h3 {
            margin: 0 0 10px 0;
        }

        .issue p {
            margin: 0;
        }

        .issue .date {
            font-size: 12px;
            color: #999;
        }

        .delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
            float: right;
            margin-top: -30px;
            
        }

        .delete-button:hover {
            background-color: darkred;
        }

        h2 {
            font-family: serif;
        }
    </style>
</head>
<body>
    <section>
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
        <div class="content-section">
            <div class="report-form">
                <h2>Report an Environmental Issue</h2>
                <form method="POST" action="">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                    
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                    
                    <button type="submit">Submit Issue</button>
                </form>
            </div>
            <div class="issues-list">
                <h2>Reported Issues</h2>
                <?php if (count(get_reports()) > 0): ?>
                    <?php foreach (get_reports() as $report): ?>
                        <div class="issue">
                            <h3><?php echo htmlspecialchars($report->title); ?></h3>
                            <p><?php echo nl2br(htmlspecialchars($report->description)); ?></p>
                            <p class="date"><?php echo $report->date; ?></p>
                            <form method="GET" action="" style="display:inline;">
                                <input type="hidden" name="delete" value="<?php echo $report->date; ?>">
                                <button type="submit" class="delete-button">Delete</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No issues reported yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</body>
</html>
