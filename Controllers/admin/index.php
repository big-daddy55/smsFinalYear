<?php

// $user_number = generateUserId('student', 'teachers');

use Core\Database;

$db = new Database();
$grades = $db->query('SELECT * FROM grades')->findAll();

view('partials/admin/head.php', [
    'title' => 'Dashboard'
]);
view('partials/admin/side-nav.php',[
    'grades' => $grades,
    'name' => $_SESSION['user']['last_name'],
    'user_type' => $_SESSION['user']['user_type']
]);
view('partials/admin/nav.php', [
    'name' => $_SESSION['user']['last_name']
]);

view('admin/dashboard.view.php',[
    'name' => $_SESSION['user']['last_name'] 
]);
view('partials/footer.php');
?>