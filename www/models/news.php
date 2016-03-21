<?php
require __DIR__ . '/../functions/sql.php';

function News_getAll() {
    Sql_connect();
    $sql = 'SELECT * FROM news;';
    return Sql_query($sql);
}