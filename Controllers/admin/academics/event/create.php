<?php

use Core\Database;

$db = new Database();

// $grades = $db->query('SELECT * FROM grades')->findAll();
$years = $db->query('SELECT * FROM academic_year')->findAll();



$title = 'Add Event';

view('partials/admin/head.php', [
    'title' => $title
]);

view('partials/admin/side-nav.php', [
    'name' => $_SESSION['user']['last_name'],
    'user_type' => $_SESSION['user']['user_type']
]);

view('partials/admin/nav.php', [
    'name' => $_SESSION['user']['last_name']
]);

view('admin/academics/event/create.view.php', [
    'years' => $years
]);

view('partials/footer.php');
