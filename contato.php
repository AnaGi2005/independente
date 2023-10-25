<?php
require '../header.php';
require '../menutopo1.php';
require "../controle/mensagem.php";
?>
<title>INDEPENDENTE</title>
<form action="../view/contato.php" method="post">


  </style>
    <div class="mt-3">
        
    <label>Nome</label>
        <input type="text" class="form-control" placeholder="Digite seu nome completo" id="nome" name="nome">
    </div>
    <div class="mt-3">
        <label>E-mail</label>
        <input type="email" class="form-control" placeholder="Digite seu melhor email" name="email" id="email">
    </div>
    <div class="mt-3">   
    <label>Assunto</label>
        <input type="text" class="form-control" placeholder="Digite o assunto" name="assunto" id="assunto" >
    </div>

    <div class="mt-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
  <textarea class="form-control" placeholder="Digite sua mensagem" name="descricao" rows="7"></textarea>
</div>
 

    <button type="submit" class="btn btn-success btn btn-outline-primary mt-3 float-right">
            ENVIAR
        </button>
    </div>

</form>
