<?php
session_start();
if (empty($_SESSION['login']) and empty($_SESSION['password'])) {
	exit ("Доступ на эту страницу разрешен только зарегистрированным пользователям. Если вы зарегистрированы, то войдите на сайт под своим логином и паролем<br><a href='form.php'>Регистрация</a>");
}
$name = $_SESSION['name'];
$login = $_SESSION['login'];
$Email  = $_SESSION['Email'];
$password  = $_SESSION['password'];

printf ('Имя пользователя:%s<br>', $name);
print <<< DOC
<form action=" " method="POST">
<input type="text" name="name" placeholder="изменить имя" >
<input type="submit" value="изменить" name="submit" >
</form>
DOC;

printf ('Ник пользователя:%s<br>',  $login);
print <<< DOC
<form action=" " method="POST">
<input type="text" name="login" placeholder="изменить ник" >
<input type="submit" value="изменить" name="submit" >
</form>
DOC;

printf ('Емайл пользователя:%s<br>', $Email);
print <<< DOC
<form action=" " method="POST">
<input type="text" name="Email" placeholder="изменить емайл" >
<input type="submit" value="изменить" name="submit" >
</form>
DOC;

printf ('Пароль пользователя:%s<br>', $password);
print <<< DOC
<form action=" " method="POST">
<input type="text" name="password" placeholder="изменить пароль" >
<input type="submit" value="изменить" name="submit" >
</form>
DOC;
if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {

        $_SESSION['name'] = $_POST['name'];

        exit("<meta http-equiv='Refresh' content='0; URL=profile.php'>");

    } elseif (!empty($_POST['login'])) {

        $_SESSION['login'] = $_POST['login'];

        exit("<meta http-equiv='Refresh' content='0; URL=profile.php'>");

    } elseif (!empty($_POST['Email'])) {

        $_SESSION['Email'] = $_POST['Email'];

        exit("<meta http-equiv='Refresh' content='0; URL=profile.php'>");

    } elseif (!empty($_POST['password'])) {

        $_SESSION['password'] = $_POST['password'];

        exit("<meta http-equiv='Refresh' content='0; URL=profile.php'>");

    }
}

print <<< DOC
<form action=" " method="POST">
<input type="submit" value="Выйти из сесии" name="out" >
</form>
DOC;
if (isset($_POST['out'])) {

    unset($_SESSION['name']);

    unset($_SESSION['login']);

    unset($_SESSION['Email']);

    unset($_SESSION['password']);

    exit("<meta http-equiv='Refresh' content='0; URL=form.php'>");
}
