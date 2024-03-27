<?php
$title = 'Grades';

use Core\Database;

$db = new Database();

// $grade = $db->query('SELECT * FROM grades WHERE id = :grade_id', [
//     'grade_id' => $grade_id
// ])->findAll();

$class_id = $_GET['grade'];



$students = $db->query("SELECT * FROM students WHERE class_id = :class_id", [
    'class_id' => $class_id
])->findAll();



$grade = $db->query("SELECT * FROM grades WHERE id = :id", [
    'id' => $class_id
])->find();
$grades = $db->query("SELECT * FROM grades")->findAll();






view('partials/admin/head.php', [
    'title' => $title,
]);

view('partials/admin/side-nav.php', [
    'grades' => $grades,
    'name' => $_SESSION['user']['last_name'],
    'user_type' => $_SESSION['user']['user_type']
]);

view('partials/admin/nav.php', [
    'name' => $_SESSION['user']['last_name']
]);

view('admin/grades/show_one.view.php', [
    'grade' => $grade,
    'students' => $students
]);

view('partials/footer.php');
