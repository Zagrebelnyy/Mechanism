<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
if (isset($_COOKIE["hash"]) && isset($_COOKIE['email'])) {
    if (isset($_POST['comment'])) {
        $user = get_info_from_db("users", ['email', 'hash'], [$_COOKIE['email'], $_COOKIE['hash']], $connect)[0];
        $comment_text = trim($_POST['comment']);
        $comment_time = date("d.m.y H:i");
        $user_id = $user['user_id'];
        $article_id = $_POST['article_id'];
        insert_info_into_db(
            'comments',
            ['user_id', 'article_id', 'comment_text', 'comment_date'],
            [$user_id, $article_id, $comment_text, $comment_time],
            $connect
        );
    }
}
