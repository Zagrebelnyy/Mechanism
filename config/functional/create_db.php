<?php
$query =
    "CREATE TABLE IF NOT EXISTS users (
        user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR (40) NOT NULL,
        hash  TEXT NOT NULL DEFAULT '',
        is_admin BIT NOT NULL DEFAULT 1
    );
        
    CREATE TABLE IF NOT EXISTS articles (
        article_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11) NOT NULL,
        article_date DATE NOT NULL,
        article_title TEXT NOT NULL,
        article_text TEXT NOT NULL,
        FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE
    );

    CREATE TABLE IF NOT EXISTS comments (
        comment_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11) NOT NULL,
        article_id INT(11) NOT NULL,
        comment_text TEXT NOT NULL,
        comment_date DATETIME NOT NULL,
        FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE,
        FOREIGN KEY(article_id) REFERENCES articles(article_id) ON DELETE CASCADE
    );";
$connect->exec($query);
