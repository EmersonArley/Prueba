<?php
  
 class  Db{
     private static $conexion=NULL;
     private function __construct (){}
     public static function Conectar(){
         $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
         self::$conexion= new PDO('mysql:host=localhost;dbname=login','root','',$pdo_options);
         return self::$conexion;
     }		
 }
 $Db = Db::Conectar(); // llamado a la cadena de conexion;
