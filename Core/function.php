<?php

use Core\Database;



function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path, $attributes = [])
{
    extract($attributes);
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    // dd($attributes);
    require base_path('views/' . $path);
}

function dd($obj)
{
    var_dump($obj);
    die();
}

function login($user)
{
    $_SESSION['user'] = [
        'id' => $user['user_id'],
        'last_name' => $user['last_name'],
        'email' => $user['email'],
        'user_type' => $user['user_type']
    ];

    session_regenerate_id(true);
    return $_SESSION['user'];
}

function checkuser($FormUserType)
{
    $DatabaseUserTypes = require base_path('database/user_types.php');


    foreach ($DatabaseUserTypes as $user_type) {
        if ($FormUserType === $user_type['user_type']) {
            header("location: {$user_type['location']}");
            exit();
        }
    }
}

function terminateWithError($errors, $path)
{
    if (!empty($errors)) {
        require base_path($path, [
            'errors' => $errors
        ]);
        die();
    }
}

function logout()
{

    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}

function generateUserId($role, $db_table)
{
    // Define role prefixes
    $rolePrefixes = [
        'teacher' => 'TEA',
        'parent' => 'PAR',
        'student' => 'STU',
        // Add more roles as needed
    ];

    // Check if the role is valid
    if (!array_key_exists($role, $rolePrefixes)) {
        // Handle invalid role (you can throw an exception or return an error)
        return "Invalid Role";
    }

    // Get the prefix for the specified role
    $prefix = $rolePrefixes[$role];

    // Generate a unique random three-digit number


    $db = new Database();

    $lastUserId = $db->query("SELECT id FROM {$db_table} ORDER BY id DESC LIMIT 1")->fetchColumn();
    $newNumericPart = $lastUserId + 1;

    // Concatenate the prefix and the random number

    $user_number = $prefix . sprintf('%03d', $newNumericPart);

    return $user_number;
}

// function generatePassword(){
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//     $password = '';

//     for ($i = 0; $i <8; $i++){
//         $password .= $characters[rand(0, strlen($characters) - 1)];
//     }
//     return $password;
// }
