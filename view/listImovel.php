<h1>Imóveis</h1>
<hr>

<div>

    <table style="top:40px;">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Foto</th>
                <th>Valor</th>
                <th>Tipo</th>
                <th><a href="cadImovel">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../controller/ImovelController.php';

            $imoveis = call_user_func(array('ImovelController','listar'));

            if (isset($imoveis)){
                foreach ($imoveis as $imovel) {
                    ?>
                    <tr>
                        <td><?php echo $imovel->getDescricao(); ?></td>
                        <td><?php echo $imovel->getFoto(); ?></td>
                        <td><?php echo $imovel->getValor(); ?></td>
                        <td><?php echo $imovel->getTipo(); ?></td>
                        <td>
                            <a href="">Editar</a>
                            <a href="">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            }else{
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
</hr>