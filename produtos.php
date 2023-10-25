
    <?php
require "../header.php";
require "../menutopo1.php";
require "../controle/buscaproduto.php";
?>
<div class="row ml-0 mr-0">
    <div class="col-md-5">
        <div id="displayfoto" class="row">
            <img class="card-img-top img-fluid" src="../assets/<?= $data["profoto"]; ?>" alt="imagem1" width="200" height="200">
        </div>
        <div class="row">
            <?php
            while ($datafoto = $prpfoto->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-md-2">
                    <img src="<?= $datafoto["fotcaminho"] ?>" class="img-fluid" onclick="clicaFoto('<?php echo $datafoto["fotcaminho"] ?>')">
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <h5><?= $data["pronome"]; ?></h5>
        </div>
        <div class="row">
            <p><?php echo $data["prodescricao"]; ?></p>
        </div>
        <!-- </div>
    <div class="col-md-3">-->
        <div class="row">
            <h4>R$ <?php echo $data["provalor"] ?></h4>
        </div>
        <div class="row">
            <p class="text-danger">
                <svg viewBox="0 0 33 23" fill="#666" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.75 3.781A2.844 2.844 0 0029.906.937H3.094A2.844 2.844 0 00.25 3.781V19.22a2.844 2.844 0 002.844 2.843h26.812a2.844 2.844 0 002.844-2.843V3.78zM2.687 19.22V11.5h27.625v7.719a.406.406 0 01-.406.406H3.094a.406.406 0 01-.407-.406zm0-12.594h27.625V3.781a.406.406 0 00-.406-.406H3.094a.406.406 0 00-.407.406v2.844zm23.97 10.563H21.78a1.219 1.219 0 110-2.438h4.875a1.219 1.219 0 010 2.438z"></path>
                </svg>
                <?php echo $data["proparcelamento"] ?> x Sem Juros
            </p>
        </div>
        <form method="post" action="carrinho.php">
                    <input type="hidden" name="proid" value="<?= $data["proid"]; ?>">
                    <input type="hidden" name="pronome" value="<?= $data["pronome"]; ?>">
                    <input type="hidden" name="propreco" value="<?= $data["provalor"]; ?>">
                    <input type="hidden" name="profoto" value="<?= $data["profoto"]; ?>">
                    <input type="hidden" name="prodescricao" value="<?= $data["prodescricao"]; ?>">
                    <button type="submit" class="btn btn-primary">
                        Adicionar ao Carrinho
                    </button>
    </div>
</div>

<?php
require "../footer.php";
?>