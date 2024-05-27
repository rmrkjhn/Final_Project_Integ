<?php
$data = [
    ['category' => 'Community Involvement', 'total_events' => 0, 'attended_events' => 0, 'average_attendance' => 0, 'satisfaction_rate' => 0],
    ['category' => 'Environmental Trends', 'total_surveys' => 0, 'positive_feedback' => 0, 'average_improvement' => 0, 'impact_score' => 90],
    ['category' => 'Impact Evaluation', 'total_projects' => 0, 'successful_projects' => 0, 'average_duration' => 0, 'efficiency_rate' => 92],
];

$total_events = 0;
$attended_events = 0;
$average_attendances = [];
$satisfaction_rates = [];

foreach ($data as $entry) {
    if (isset($entry['total_events'])) {
        $total_events += $entry['total_events'];
    }
    if (isset($entry['attended_events'])) {
        $attended_events += $entry['attended_events'];
    }
    if (isset($entry['average_attendance'])) {
        $average_attendances[] = $entry['average_attendance'];
    }
    if (isset($entry['satisfaction_rate'])) {
        $satisfaction_rates[] = $entry['satisfaction_rate'];
    }
}

$average_attendance = count($average_attendances) > 0 ? array_sum($average_attendances) / count($average_attendances) : 0;
$average_satisfaction_rate = count($satisfaction_rates) > 0 ? array_sum($satisfaction_rates) / count($satisfaction_rates) : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Data Analysis and Reporting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: green;
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

        .report-table {
            width: 100%;
            border-collapse: collapse;
        }
        .report-table th, .report-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .report-table th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .summary, .engagement-rate, .trend-analysis {
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            font-family: serif;
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
        <h1>Community Involvement and Environmental Impact Report</h1>
        <table class="report-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Total Events/Surveys/Projects</th>
                    <th>Attended Events/Positive Feedback/Successful Projects</th>
                    <th>Average Attendance/Improvement/Duration</th>
                    <th>Satisfaction Rate/Impact Score/Efficiency Rate (%)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $entry): ?>
                    <tr>
                        <td><?php echo $entry['category']; ?></td>
                        <td><?php echo isset($entry['total_events']) ? $entry['total_events'] : '0'; ?></td>
                        <td><?php echo isset($entry['attended_events']) ? $entry['attended_events'] : '0'; ?></td>
                        <td><?php echo isset($entry['average_attendance']) ? $entry['average_attendance'] : '0'; ?></td>
                        <td><?php echo isset($entry['satisfaction_rate']) ? $entry['satisfaction_rate'] : '0'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="summary">
            <h2>Summary</h2>
            <p>Total Events/Surveys/Projects: <?php echo $total_events; ?></p>
            <p>Attended Events/Positive Feedback/Successful Projects: <?php echo $attended_events; ?></p>
            <p>Average Attendance/Improvement/Duration: <?php echo round($average_attendance, 2); ?></p>
            <p>Average Satisfaction Rate/Impact Score/Efficiency Rate: <?php echo round($average_satisfaction_rate, 2); ?>%</p>
        </div>

        <div class="engagement-rate">
            <h2>Community Engagement Rate</h2>
            <p>Events: 0%</p>
            <p>Surveys: 0%</p>
        </div>

        <div class="trend-analysis">
            <h2>Environmental Trend Analysis</h2>
            <p>Analysis of environmental survey data over several months.</p>
        </div>
    </section>
</body>
</html>
