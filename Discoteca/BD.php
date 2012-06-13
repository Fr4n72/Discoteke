<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BD
 *
 * @author pascual
 */
class BD extends PDO{
    
    public function BD($host="localhost",$db="discoteca",$user="root",$pass=""){
        
        //$this->pdo= new PDO("mysql:host=$host;dbname=$db", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $dsn= "mysql:host=$host;dbname=$db";
        $pdo= parent::__construct($dsn, $user, $pass);
        
    }
    
}
?>
