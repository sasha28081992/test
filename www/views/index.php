<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
    <?php
    foreach ($items as $item) :?>

        <br><img src="<?php echo $item['path'];?>" style="max-width: 300px">
        <br><?php echo $item['title']; ?>

    <?php endforeach; ?>
</body>
</html>