<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Inicialia a sessão
session_start();

//Renova todas as variáveis da sessão
$_SESSION = array();

//Distruir sessão
session_destroy();

//Redirecionar para tela de login após logout
header("Location: ../view/login.php");
exit;