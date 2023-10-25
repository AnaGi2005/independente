<?php
//require 'modulo.php';

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    if(empty($_POST)){
        $sql = "select * from produtos order by pronome;";
        $prp = $pdo->prepare($sql);
        $prp->execute();
        Modulo::desconectar();
    }
    
    if(!empty($_GET)) {
        $proid = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "select * from produtos where proid = ?;";
        $prp = $pdo->prepare($sql);
        $prp->execute(array($proid));
        $data = $prp->fetch(PDO::FETCH_ASSOC);
        Modulo::desconectar();
        $sqlfoto = "select * from fotosprodutos where fotproid = ?;";
        $prpfoto = $pdo->prepare($sqlfoto);
        $prpfoto->execute(array($proid));
        Modulo::desconectar(); 
    }
} catch (Exception $e) {
    return;
}
