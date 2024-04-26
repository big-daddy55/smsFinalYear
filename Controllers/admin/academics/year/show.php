<?php
$title = 'Academic Year';

use Core\Database;

$db = new Database();

// $grade = $db->query('SELECT * FROM grades WHERE id = :grade_id', [
//     'grade_id' => $grade_id
// ])->findAll();


// if (isset($_GET['grade'])) {
//     $class_id = $_GET['grade'];
// } else {
//     $class_id = 1;
// }



// $students = $db->query("SELECT * FROM students WHERE class_id = :class_id", [
//     'class_id' => $class_id
// ])->findAll();



// $grade = $db->query("SELECT * FROM grades WHERE id = :id", [
//     'id' => $class_id
// ])->find();

// $grades = $db->query("SELECT * FROM grades")->findAll();


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

view('admin/academics/year/show.view.php', [
    'years' => $years,

]);

view('partials/footer.php');
