<?php
require __DIR__ . '/models/page.php';


   $res =  News_getOne($_GET['id']);


include __DIR__ . '/views/page.php';