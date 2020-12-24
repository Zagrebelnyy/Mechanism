<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";

if (isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $hash = md5($email . $password . time());
    $result =  get_info_from_db('users', 'email', $email, $connect)[0];
    if (empty($result['email'])) {
        if (insert_info_into_db(
            'users',
            ['name', 'email', 'password', 'hash'],
            [$name, $email, md5($password), $hash],
            $connect
        )) {
            setcookie("email", $email, time() + 3600 * 24 * 30, '/');
            setcookie("hash", $hash, time() + 3600 * 24 * 30, '/');
            header('Location: /index.php');
        }
    }
}
