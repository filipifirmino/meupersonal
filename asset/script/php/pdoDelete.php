<?php
    $dsn = "mysql:dbname=meupersonal; host= localhost";
    $dbuser = "root";
    $dbpass = "dijital123";

    $id = $_POST['id-user'];

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
            /*Conectando ao banco de dados*/
            
        $sql = "DELETE FROM user WHERE id =".$id;
        $sql = $pdo->query($sql);



    }catch(PDOException $e){
        echo "Errod: ". $e->getMessage();
    }

?>