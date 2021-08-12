<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div id="reg_form">
                <h1 id="form_title">Форма регистрации:</h1>
                <form action="?type=Aut&action=reg" method="post">
                    <input class="form-control form-group" type="text" name="name" placeholder="Введите имя"
                           value="<?= $_SESSION['regData']['name'] ?? '' ?>">
                    <input class="form-control form-group" type="text" name="login" placeholder="Введите логин"
                           value="<?= $_SESSION['regData']['login'] ?? '' ?>">
                    <input class="form-control form-group" type="password" name="pass1" placeholder="Введите пароль"
                           value="<?= $_SESSION['regData']['pass1'] ?? '' ?>">
                    <input class="form-control form-group" type="password" name="pass2"
                           placeholder="Введите пароль повторно"
                           value="<?= $_SESSION['regData']['pass2'] ?? '' ?>">
                    <div id="button_reg">
                        <button class="btn btn-lg btn-success btn-block btn-signin" type="submit"
                        >Зарегистрироваться
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php
unset($_SESSION['regData']);
?>