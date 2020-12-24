<?php
//Для выхода разавторизации пользователя

    if ((isset($_COOKIE['email'])) && (isset($_COOKIE['hash']))) {
        $user = get_info_from_db("users", ['email', 'hash'], [$_COOKIE['email'], $_COOKIE['hash']], $connect)[0];
        if (!empty($user)) {
            delete_info_from_db('users', ['email', 'hash'], [$_COOKIE['email'], $_COOKIE['hash']], $connect);
        }
        setcookie('email', '');
        setcookie('hash', '');
    }

