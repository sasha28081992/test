<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

    <?php
    foreach ($items as $item) :?>
        <br><?php echo $item['title']; ?>
        <br><a href=<?php __DIR__ ?>"/../page.php?id=<?php echo $item['id'];?>"><img src="<?php echo $item['path'];?>"style="max-width: 300px"></a>
    <?php endforeach; ?>

</body>
</html>