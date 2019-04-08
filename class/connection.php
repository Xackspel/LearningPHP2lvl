<?php

 class Connection{
     /** Get connection to DB and return as variable **/
     public static function Make($MySQL_Path, $DataBaseLogin, $DataBasePass){
         $pdo = new PDO($MySQL_Path, $DataBaseLogin, $DataBasePass); // Connection to Data Base;
         return $pdo;
     }
 }