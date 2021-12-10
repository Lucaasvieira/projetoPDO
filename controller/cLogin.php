<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cLogin
 *
 * @author jairb
 */
class cLogin {
    //put your code here
    
    public function logar() {
        if(isset($_POST['logar'])){
            $email = $_POST['email'];
            $pas = $_POST['pas'];
            
            $pdo = require_once '../pdo/connection.php';
            $sql = "select * from usuario where email = ?";
            
            $statement = $pdo->prepare($sql);
            $statement->execute([$email]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $count = $statement->rowCount();
            if($count > 0){
                if(password_verify($pas, $result['pas'])){
                    session_start();
                    $_SESSION['usuarioM'] = $result['nomeUser'];
                    $_SESSION['emailM'] = $result['email'];
                    $_SESSION['logadoM'] = true;
                    header("Location: cadUsuario.php");
                }
            }else{
                header("Location: login.php");
            }
            unset($$statement);
            unset($pdo);
            unset($result);
        }
    }
}
