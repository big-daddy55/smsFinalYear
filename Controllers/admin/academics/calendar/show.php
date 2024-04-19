<?php
$title = 'Grades';

use Core\Database;

$db = new Database();





$years = $db->query("SELECT * FROM academic_year")->findAll();







view('partials/admin/head.php', [
    'title' => $title,
]);

view('partials/admin/side-nav.php', [
    'name' => $_SESSION['user']['last_name'],
    'user_type' => $_SESSION['user']['user_type']
]);

view('partials/admin/nav.php', [
    'name' => $_SESSION['user']['last_name']
]);

view('admin/acadeemics/calendar/show.view.php', [
    'year' => $years
]);

view('partials/footer.php');
