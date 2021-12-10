<?php

require_once 'config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connection
 *
 * @author jairb
 */
class connection {

    //put your code here
    public static function getConnection($host, $dbname, $username, $password) {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dsn, $username, $password, $options);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}
return connection::getConnection($host, $dbname, $username, $password);
