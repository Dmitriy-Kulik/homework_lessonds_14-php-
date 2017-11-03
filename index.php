<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 02.11.2017
 * Time: 16:22
 */

include_once 'hello.php';

echo myForm();

if(isset( $_POST['name'])){
    $n = $_POST['name'];
    session_start();
    $_SESSION['name'] = $n;
    echo "Привет, " . showHello($n) . "!<br>";

    echo "
            <p><a href=\"1.php\" name=\"html_1\">html_1</a></p>
            <p><a href=\"2.php\" name=\"html_2\">html_2</a></p>
            <p><a href=\"3.php\" name=\"html_3\">html_3</a></p>
            <p><a href=\"4.php\" name=\"html_4\">html_4</a></p>
    ";
}