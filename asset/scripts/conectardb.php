<?php

     function conectadb(){
        $database = "meupersonal" ;
        $user = "root";
        $pass = '';
        $ind = "localhost";

        $con = new PDO("mysql:host=$ind; dbname=$database" ,$user , $pass);
        
    
    
    }