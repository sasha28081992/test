<?php

require __DIR__ . '/models/news.php';
require __DIR__ . '/functions/file.php';

if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_POST['text_news'])) {
        $data['text_news'] = $_POST['text_news'];
    }
    if (!empty($_FILES)) {
        $res = File_upload('image');
        if (false !== $res) {
            $data['image'] = $res;
        }
    }
    if (isset($data['title']) && isset($data['text_news']) && isset($data['image']) ) {
        News_insert($data);
        header('Location: /index.php');
        die;
    }
}

include __DIR__ . '/views/index.php';