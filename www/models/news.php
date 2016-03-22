<?php
require __DIR__ . '/../functions/sql.php';

function News_getAll() {
    Sql_connect();
    $sql = 'SELECT * FROM news ORDER BY id DESC';
    return Sql_query($sql);
}

function News_insert($data){
    Sql_connect();
    $sql = "INSERT INTO news (title, text_news, path) VALUES('". $data['title'] ."','". $data['text_news'] ."','". $data['image'] ."')";
    Sql_exec($sql);
}