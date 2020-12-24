<?php
function get_comments($article_id, $connect)
{
    $comments = get_info_from_db('comments', 'article_id', $article_id, $connect);
    $stmt = $connect->prepare("SELECT comments.user_id, comments.comment_text, comments.comment_date, users.name
    FROM comments INNER JOIN users ON users.user_id = comments.user_id WHERE comments.article_id = ?");
    $stmt->execute([$article_id]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}
