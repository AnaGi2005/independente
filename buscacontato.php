<?php
//require 'modulo.php';

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(empty($_POST)){
    $sql = "select * from contatos order by condata;";
    $prp = $pdo->prepare($sql);
    $prp->execute();
    Modulo::desconectar();
}