<form action="?type=Aut&action=reg" method="post">
    <input class="form-control form-group" type="text" name="name" placeholder="Введите имя"
           value="<?= $_SESSION['regData']['name'] ?? '' ?>">
    <input class="form-control form-group" type="text" name="login" placeholder="Введите логин"
           value="<?= $_SESSION['regData']['login'] ?? '' ?>">
    <input class="form-control form-group" type="password" name="pass1" placeholder="Введите пароль"
           value="<?= $_SESSION['regData']['pass1'] ?? '' ?>">
    <input class="form-control form-group" type="password" name="pass2" placeholder="Введите пароль повторно"
           value="<?= $_SESSION['regData']['pass2'] ?? '' ?>">

    <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="OK">
</form>
<?php
unset($_SESSION['regData']);
?>