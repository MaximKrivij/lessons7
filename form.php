<?php
session_start();

print <<<DOC

<table>
   
   <form action=" " method="POST">
      
      <tr>
       
        <td>Имя:</td>
       
        <td><input type="text" size="20" name="name" placeholder="Введите имя"></td>
     
      </tr>
    
      <tr>
      
        <td>Логин:</td>
       
        <td><input type="text" size="20" name="login" placeholder="Введите логин"></td>
     
      </tr>
    
      <tr>
      
        <td>Емайл:</td>
      
        <td><input type="email" size="20" name="Email" placeholder="Введите Емайл"></td>
    
      </tr>
	 
	  <tr>
     
        <td>Пароль:</td>
    
        <td><input type="password" size="20" maxlength="20" name="password" placeholder="Введите пароль" ></td>
 
      </tr>
    
      <tr>
    
        <td>Подтверждения пароля:</td>
    
        <td><input type="password" size="20" maxlength="20" name="password2" placeholder="Подтвердите пароль"></td>
    
      </tr>
   
      <tr>
    
       <td colspan="2"><input type="submit" value="Зарегистрироваться" name="submit" ></td>
   
      </tr>
	
   </form>
 
 </table>
DOC;
	
if (isset($_POST['submit'])) { 
    if (empty($_POST['name']))  {

        echo '<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" /> Введите имя! <br>';

    } elseif (!preg_match("/^\w{3,}$/", $_POST['name'])) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> В поле "Имя" введены недопустимые символы! Только латинские буквы, цифры и подчеркивание!<br>';

    } elseif (empty($_POST['login']))  {

        echo '<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" /><br>Введите логин! <br>';

    } elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><br>В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';

    }  elseif (empty($_POST['password'])) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> Введите пароль!<br>';

    } elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> Пароль слишком короткий! Пароль должен быть не менее 6 символов! <br>';

    } elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password2'])) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> Пароль слишком короткий! Пароль должен быть не менее 6 символов! <br>';

    } elseif (empty($_POST['password2'])) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> Введите подтверждение пароля!<br>';

    } elseif ($_POST['password'] != $_POST['password2']) {

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />Введенные пароли не совпадают!<br>';

    } else {

        $name = $_POST['name'];

        $login = $_POST['login'];

        $Email = $_POST['Email'];

        $password = $_POST['password'];

        $_SESSION['name']=$name;

        $_SESSION['login']=$login;

        $_SESSION['Email']=$Email;

        $_SESSION['password']=$password;

        echo "<meta http-equiv='Refresh' content='0; URL=login.php'>";

    }

}
