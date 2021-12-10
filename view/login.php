<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cLogin.php';
$login = new cLogin();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <title></title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="<?php $login->logar(); ?>" method="POST">
            <input type="email" name="email" required placeholder="E-mail login"/>
            <br><br>
            <input type="password" name="pas" required placeholder="Senha..."/>
            <br><br>
            <input type="submit" name="logar" value="Logar"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
