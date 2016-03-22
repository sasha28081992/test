<?php

require __DIR__ . '/../functions/sql.php';

function News_getOne($id) {
    Sql_connect();
    $sql = "SELECT * FROM news WHERE id= '". $id ."'";
    return Sql_query($sql);
}