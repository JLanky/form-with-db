<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hello!!!</title>
</head>
<body>

<?php
include "php_scripts/validation_script.php";

?>

    <form class="form-horizontal" role="form">
        <label for="inputName" class="col-sm-2 control-label">Имя</label><br>
        <input name="name" type="text" class="form-control" id="inputName" placeholder="Введите ваше имя"><br>
        <label for="inputSurname" class="col-sm-2 control-label">Фамилия</label><br>
        <input name="name" type="text" class="form-control" id="inputName" placeholder="Введите ваше имя"><br>
        <label for="inputEmail3" class="col-sm-2 control-label">Эл.почта</label><br>
        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Введите ваш email"><br>
        <label for="inputPass" class="col-sm-2 control-label">Пароль</label><br>
        <input name="pass" type="password" id="inputPass" placeholder="Введите пароль"><br>
<label for="button" class="col-sm-2 control-label"></label>
<input name="button" type="button" id="button">
        <?php
        mysqli_real_connect(`write_forms`);
        ?>
    </form>
</body>
</html>