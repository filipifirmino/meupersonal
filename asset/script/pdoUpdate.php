<?php
$dsn = "mysql:dbname=meupersonal;host=localhost";
$dbuser ="root";
$dbpass="dijital123";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        
        $email = $_POST['email-user'];
        $pass = md5($_POST['pass-user']);

        
            $sql = " UPDATE user SET senha = '$pass' WHERE email = '$email' ";
            $sql = $pdo->query($sql);
            echo "senha alterada com sucesso";
    

    } catch(PDOException $e){
        echo "Error: ". $e->getMessage();
    }




?>

