<?php
$name = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Простое PHP приложение</title>
</head>
<body>
    <h1>Привет!</h1>
    <?php if ($name): ?>
        <p>Здравствуйте, <?php echo $name; ?>!</p>
    <?php else: ?>
        <form method="post" action="">
            <label for="name">Введите ваше имя:</label>
            <input type="text" id="name" name="name" required />
            <button type="submit">Отправить</button>
        </form>
    <?php endif; ?>
</body>
</html>