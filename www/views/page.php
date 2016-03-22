<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<?php foreach ($res as $re):?>
    <?php echo $re['title']; ?><br>
    <img src="<?php echo $re['path']; ?>"style="max-width: 300px"><br>
    <?php echo $re['text_news']; ?>
<?php endforeach; ?><br>
<a href=<?php __DIR__ ?>"/index.php">В галерею новостей</a>

</body>
</html>