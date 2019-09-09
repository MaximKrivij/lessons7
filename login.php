<?php
session_start();
print <<<HERE
<table>
 <form action=" " method="POST">
  <tr>
   <td>Логин:</td>
   <td><input type="text" name="login" ></td>
  </tr>
  <tr>
   <td>Пароль:</td>
   <td><input type="password" name="password" ></td>
  </tr> 
  <tr>
   <td colspan="2"><input type="submit" value="Ввойти" name="submit" ></td>
  </tr>
 </form>
</table>
HERE;

$login = $_SESSION['login'];
$Email = $_SESSION['Email'];
$password = $_SESSION['password'];

if (isset($_POST['submit'])) {
    if (!empty($_POST['login']) and !empty($_POST['password'])) {

        $log = $_POST['login'];

        $pass = $_POST['password'];

        if ($log == $login || $log == $Email and $pass == $password) {

            echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";

        } else {

            echo 'Неверный Логин или Пароль';

        }

    } else {

        echo 'Введите Логин и Пароль';
    }

}

