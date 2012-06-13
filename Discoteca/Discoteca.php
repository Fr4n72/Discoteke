<?php

/*
 * Clase discoteca
 */

/**
 * Description of Discoteca
 *
 * @author
 */
include 'BD.php';

class Discoteca {
    
    //Atributos de la clase
    private $id;
    private $nombre;
    private $jefe;
    private $login;
    private $password;
    private $direccion;
    private $localidad;
    private $provincia;
    private $web;
    private $mail;
    private $telefono;
    private $latitud;
    private $longitud;
    private $logo_url;
    
    //Constructor por parametros de la clase
    public function Discoteca($nom,$jef,$log,$pass,$dir,$loc,$pro,$web,$email,$tel,$lat,$lon,$logo){
        
        $this->nombre= $nom;
        $this->jefe= $jef;
        $this->login= $log;
        $this->password= $pass;
        $this->direccion= $dir;
        $this->localidad= $loc;
        $this->provincia= $pro;
        $this->web= $web;
        $this->mail= $email;
        $this->telefono= $tel;
        $this->latitud= $lat;
        $this->longitud= $lon;
        $this->logo_url= $logo;
        
    }
    
    //Metodo para insertar una nueva discoteca
    public function insertar(){                                       
        
    }
    
    //Metodo para eliminar una discoteca
    public function eliminar(){                
        
    }
    
    //Metodo para modificar una discoteca
    public function modificar(){
        
    }
    
}

?>
