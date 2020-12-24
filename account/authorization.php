<?php

/**
 *Авторизация пользователя
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $result = get_info_from_db('users', 'email', $email, $connect)[0];
    if ($result['password'] == md5($password)) {
        $hash = md5($email . $password . time());
        update_info_in_db('users', 'hash', $hash, 'user_id', $result['user_id'], $connect);
        setcookie("email", $email, time() + 3600 * 24 * 30, '/');
        setcookie("hash", $hash, time() + 3600 * 24 * 30, '/');
        header('Location: /index.php');
        exit();
    }
}
