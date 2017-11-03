<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
        setcookie('html_4', 'Вы посетили страницу html_4');
        foreach ($_COOKIE as $value){
            if(stristr($value,'html'))
            echo $value . '<br>';
        }
    ?>
</head>
<body>
    <p><a href="1.php" name="html_1">html_1</a></p>
    <p><a href="2.php" name="html_2">html_2</a></p>
    <p><a href="3.php" name="html_3">html_3</a></p>
</body>
</html>