<?php
//Для проверки является ли пользователь 
function is_admin($connect)
{
    $user = get_info_from_db("users", ['email', 'hash'], [$_COOKIE['email'], $_COOKIE['hash']], $connect, 'is_admin')[0];
    if ($user['is_admin'] == 1) {
        return true;
    } else {
        return false;
    }
}
