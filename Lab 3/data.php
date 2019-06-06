<?php
    $name = $_POST["inputName"];
    $gender = $_POST["gender"];
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    $file = fopen('data.txt', 'w+');
    ftruncate($file, 0);
    $content = $name. PHP_EOL .$gender. PHP_EOL .$email. PHP_EOL .$password;
    fwrite($file , $content);
    fclose($file );
?>
