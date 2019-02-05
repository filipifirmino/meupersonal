<?php
    require conectardb.php;

    conectardb();

    $query = INSERT INTO usuario (nome,email,senha) VALUE (?,?,?);
?>