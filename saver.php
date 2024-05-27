<?php

function save($file, $filename) {
    $dom = new DomDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($file->asXML());
    $dom->save($filename);
}

function does_user_exist($username) {
    $file = simplexml_load_file('data/users.xml');
    if (count($file->user) > 0) {
        foreach ($file->user as $user) {
            if ($user['username'] == $username) {
                return true;            
            }
        }
    }
    return false;
}

function get_reports() {
    $file = simplexml_load_file('data/reports.xml');
    return $file->report;
}

function try_login($username, $password) {
    if (does_user_exist($username)) {
        $file = simplexml_load_file('data/users.xml');
        foreach ($file->user as $user) {
            if ($user['password'] == base64_encode($password) && $user['username'] == $username) {
                $_SESSION['username'] = strval($user['username']);
                $_SESSION['name'] = strval($user->name);
                return true;
            }
        }
    }
    return false;
}

function add_user($name, $username, $password) {
    if (!does_user_exist($username)) {
        $filename = 'data/users.xml';
        $file = simplexml_load_file($filename);
        $new_user = $file->addChild('user');
        $new_user->addAttribute('username', $username);
        $new_user->addAttribute('password', base64_encode($password));
        $new_user->addChild('name', $name);
        save($file, $filename);
        try_login($username, $password);
        return true;
    } else {
        return false;
    }
}

function add_report($title, $description, $date) {
    $filename = 'data/reports.xml';
    $file = simplexml_load_file($filename);
    $report = $file->addChild('report');
    $report->addChild('title', $title);
    $report->addChild('description', $description);
    $report->addChild('date', $date);
    save($file, $filename);
}

function delete_report($timestamp) {
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

function session_is_valid() {
    return isset($_SESSION['username']) && does_user_exist($_SESSION['username']);
}
?>
