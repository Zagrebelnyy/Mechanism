<?php
    //Получить id статьи
    function get_article_id(){
        $url = $_SERVER['REQUEST_URI'];
        $article_id = substr($url, strrpos($url,'/')+1, strrpos($url,'/')+3-strrpos($url,'.'));
        return $article_id;
    }
?>