<?php
try {
    $connect = new PDO(
        'mysql:host=' . LOCAL_HOST . ';dbname=' . DB_NAME,
        USER,
        PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
} catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
}
