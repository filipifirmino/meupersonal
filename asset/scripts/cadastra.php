<?php
    require conectardb.php;

    
    $nome = isset(_POST['name_user']);
    $email = isset(_POST['email_user']);
    $pass = isset(_POST['pass_user']);

    conectardb();
    
    $query = INSERT INTO usuario ($nome,$email,$senha) VALUE (?,?,?);

?>