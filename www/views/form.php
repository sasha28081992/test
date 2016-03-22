<form action=<?php __DIR__ ?>"/add.php" method="post" enctype="multipart/form-data">
    Добавить новость:<br>
    <label for="title">Название</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="text_news">Введите тект новости</label>
    <input type="text" id="text_news" name="text_news">
    <br>
    <label for="image">Файл</label>
    <input type="file" id="image" name="image">
    <br>
    <input type="submit">
</form>