<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 02.11.2017
 * Time: 20:55
 */

function myForm(){
    return '
        <h3>Введите ваше имя:</h3>
        <form action="index.php" method="post">
        <p><input type="text" name="name"></p>
        <p><input type="submit" value="send"></p>
        </form>
        ';
}
function showHello($hello){
    return $hello;
}