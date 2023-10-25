<?php

//delphi uses modulo; ALT+F11 PHP é para poder usar todo o conteudo da classe
//require "modulo.php";

//crio um atributo e instancia a classe
$pdo = Modulo::conectar();
//seta para o atributo algumas mensagens de possiveis erros
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//definimos um atributo para execução de algumas instruções
$validado = false;

//verifica se foi dado um enter(submit) na página
if(!empty($_POST)){
    $validado = true;
    //pega a extensão do arquivo .jpg - .png - .gif - .bmp - .pdf - .xls - .doc
    $ext = strtolower(substr($_FILES['foto']['name'],-4));
    //crio um atributo que vai gerar um nome novo para o arquivo feito upload
    $uplnome = "produto-".date("dmY-His");
    //echo $uplnome;
    //defino um novo nome para o arquivo
    $novonome = $uplnome.$ext;
    //definimos uma pasta para gravar os arquivos
    $dir = "upload/";
    //atributos que irão levar os dados para o banco
    $profoto = $dir.$novonome;
    $pronome = strtoupper(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS));
    $prodescricao = strtoupper(filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_SPECIAL_CHARS));
    $provalor = str_replace([','],'.',filter_input(INPUT_POST,'valor',FILTER_SANITIZE_SPECIAL_CHARS));
    $proparcelamento = filter_input(INPUT_POST,'parcelamento',FILTER_SANITIZE_SPECIAL_CHARS);
}

//verifico se o status da meu atributo é verdadeiro
if($validado){
    //delphi FDQuery (propriedade SQL) - criar um atributo que irá receber as instruções SQL
    $sql = "insert into produtos(pronome,prodescricao,provalor,proparcelamento,profoto)values(?,?,?,?,?);";
    //preparo a instrução de sql para receber os parametros
    $prp = $pdo->prepare($sql);
    //executo setando os valores capturados da interface
    $prp->execute(array($pronome,$prodescricao,$provalor,$proparcelamento,$profoto));
    //função que cria uma cópia da imagem ou arquivo para a pasta definida pelo programador
    move_uploaded_file($_FILES['foto']['tmp_name'],$profoto);//gravo a imagem que era local no servidor
    Modulo::desconectar();
    $validado=false;
}