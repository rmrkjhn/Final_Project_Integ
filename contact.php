<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $messageContent = htmlspecialchars($_POST['message']);
        $date = date('Y-m-d H:i:s');

        $xmlFile = 'data/messages.xml';

        // Load the XML file
        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);
        } else {
            $xml = new SimpleXMLElement('<messages></messages>');
        }

        // Add a new message element
        $newMessage = $xml->addChild('message');
        $newMessage->addChild('name', $name);
        $newMessage->addChild('email', $email);
        $newMessage->addChild('content', $messageContent);
        $newMessage->addChild('date', $date);

        // Save the updated XML file
        $xml->asXML($xmlFile);

        // Redirect to a thank you page or back to the form
        header('Location: contact.php');
        exit();
    } elseif (isset($_POST['delete'])) {
        $indexToDelete = (int)$_POST['delete'];
        $xmlFile = 'data/messages.xml';

        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);
            unset($xml->message[$indexToDelete]);
            $xml->asXML($xmlFile);
        }

        // Redirect back to the form
        header('Location: contact.php');
        exit();
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
    <title>Contact</title>
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
        hr {
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
        }
        form {
            margin-top: 20px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        form.delete-form {
            display: inline;
        }
        input[type="submit"].delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"].delete-button:hover {
            background-color: darkred;
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
        <hr>
        <?php include_once('components/header.php'); ?>
        <h2>Get Message</h2>
        <p>If you have any questions, feedback, or inquiries, please feel free to contact us by filling out the form below. We'll get back to you as soon as possible.</p>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <input type="submit" value="Send Message">
        </form>

        <h2>Messages</h2>
        <?php
        // Display the messages
        $xmlFile = 'data/messages.xml';

        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);

            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Content</th><th>Date</th><th>Action</th></tr>";

            foreach ($xml->message as $index => $message) {
                $name = htmlspecialchars($message->name);
                $email = htmlspecialchars($message->email);
                $content = htmlspecialchars($message->content);
                $date = htmlspecialchars($message->date);

                echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$email}</td>";
                echo "<td>{$content}</td>";
                echo "<td>{$date}</td>";
                echo "<td>
                        <form class='delete-form' method='POST' action=''>
                            <input type='hidden' name='delete' value='{$index}'>
                            <input type='submit' value='Delete' class='delete-button'>
                        </form>
                      </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No messages found.</p>";
        }
        ?>
    </div>
</body>
</html>
