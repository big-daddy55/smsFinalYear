<?php

use Core\Database;

$db = new Database();

// dd($_POST);


$user_number = generateUserId('student', 'students');
error_log($user_number);

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$other_name = $_POST['other_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$date_of_admission = $_POST['date_of_admission'];
$height = $_POST['height'];
$blood_group = $_POST['blood_group'];
$grade = $_POST['grade'];

// Guardian's Information
$guardian_user_number = generateUserId('parent', 'guardians');
error_log($guardian_user_number);
$guardian_type = $_POST['guardian_type'];
$guardian_name = $_POST['guardian_name'];
$guardian_email = $_POST['guardian_email'];
$guardian_contact = $_POST['guardian_contact'];
$guardian_occupation = $_POST['guardian_occupation'];
$address = $_POST['address'];



$db->query("INSERT INTO students ( user_number, first_name, last_name, other_name, gender, date_of_birth, date_of_admission, height, blood_group, class_id) VALUES (:user_number, :first_name, :last_name, :other_name, :date_of_birth, :date_of_admission, :height, :blood_group, :grade)", [
    'user_number' => $user_number,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'other_name' => $other_name,
    'teacher_type' => $teacher_type,
    'qualification' => $qualification,
    'email' => $email,
    'date_of_birth' => $date_of_birth,
    'date_of_employment' => $date_of_employment,
    'cv_path' => $cv_path,
    'contact' => $contact,
    'address' => $address
]);

$db->query("INSERT INTO users (user_number, user_type, email, password) VALUES(:user_number, :user_type, :email, :password)", [
    'user_number' => $user_number,
    'user_type' => 'facilitator',
    'email' => $email,
    'password' => 'default'
]);

if ($teacher_type === "class_teacher") {
    $db->query("INSERT INTO class_teachers (user_number, class_id) VALUES(:user_number, :class_id)", [
        'user_number' => $user_number,
        'class_id' => $class
    ]);

    $db->query("UPDATE grades SET class_teacher_number = :user_number WHERE id = :class_id", [
        'user_number' => $user_number,
        'class_id' => $class
    ]);
} elseif ($teacher_type === "subject_teacher") {
    $db->query("INSERT INTO subject_teachers (user_number, subject) VALUES(:user_number, :subject)", [
        'user_number' => $user_number,
        'subject' => $subject
    ]);
}

// Update the database with the file path

// $cv_path = $db->quote($targetFile);
// // dd($profilePhotoPath);
// $db->query("UPDATE teachers SET cv = :cv_path WHERE user_number = :user_number", [
//     'cv_path' => $cv_path,
//     'user_number' => $user_number
// ]);
$alert = "{$first_name} added.";

header("Location: /admin/teachers/create?alert=" . urlencode($alert));
die();

error_log('not completed');
