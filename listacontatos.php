<?php
require '../header.php';
require '../menutopo1.php';
require '../controle/buscacontato.php';
?>
<div class="mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">CLIENTE:</th>
                <th scope="col">E-MAIL:</th>
                <th scope="col">ASSUNTO:</th>
                <th scope="col">MENSAGEM:</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = $prp->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <th scope="row" class="text-info"><?php echo $data["connome"]; ?></th>
                    <td class="text-info"><?php echo $data["conemail"]; ?></td>
                    <td class="text-info"><?php echo $data["conassunto"]; ?></td>
                    <td class="text-info"><?php echo $data["conmensagem"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
require '../footer.php';
?>