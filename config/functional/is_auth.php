<?php
//Проерка авторизован ли пользователь
function is_auth($connect)
{
    if ((isset($_COOKIE['email'])) && (isset($_COOKIE['hash']))) {
        $user = get_info_from_db("users", ['email', 'hash'], [$_COOKIE['email'], $_COOKIE['hash']], $connect)[0];
        if (!empty($user)) {
            return true;
        } else {
            // setcookie('email', '');
            // setcookie('hash', '');
            // return false;
        }
    } else {
        return false;
    }
}
