<?php

$login = '';
if(!isset($_COOKIE['count'])) {
    $_COOKIE['count'] = 1;

    setcookie('count', $_COOKIE['count']);

} else {
    $_COOKIE['count']++;
    setcookie('count', $_COOKIE['count']);
}
if(isset($_POST['submit'])) {
    if(!empty($_POST)) {
        $login = $_POST['login'];
        setcookie('login', $login);
    }
}

print <<<DOC
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action=" " method="POST">
<input type="text" name="login" placeholder="Введите логин" value="$login">
<input type="submit" name="submit" value="Войти">
</form>

</body>
</html>
DOC;

echo 'Вы посетили:',$_COOKIE['count'],'<br>';
