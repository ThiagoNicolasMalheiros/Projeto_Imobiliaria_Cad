<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Imóveis</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post" class="form">
        <div>

        <label class="label">Descrição:</label>
       <br/>
        <input type="text" name="descricao" id="descricao" class="inputs"><br/>

        <label class="label">Foto:</label>
        <br/>
        <input type="file" name="foto" id="foto" class="inputs"><br/>

        <label for="dinheiro" class="label">R$</label>
       <br/>
        <input type="text" name="valor" id="valor" class="inputs" onkeyup="formatarMoeda()"><br/>

        <script>
            function formatarMoeda() {
                var elemento = document.getElementById('valor');
                var valor = elemento.value;
        
                valor = valor + '';
                valor = parseInt(valor.replace(/[\D]+/g, ''));
                valor = valor + '';
                valor = valor.replace(/([0-9]{2})$/g, ",$1");
        
                if (valor.length > 6) {
                    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                }
        
                elemento.value = valor;
                if(valor == 'NaN') elemento.value = '';
            }
        </script>

        <label class="label">Selecione o tipo de Imóvel</label>
        <br/>
        <select name="tipo" id="tipo" class="select">
        <option value="0"></option>
        <option value="A">Casa</option>
        <option value="C">Sala</option>
        <option value="D">Prédio</option>
        <option value="E">Salão</option>
        <option value="C">Galpão</option>
        </select><br/><br/>
        <div class="divBotao">
        <input type="submit" name="btnSalvar" id="btnSalvar" class="botao">
        </div>
        
        </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['btnSalvar'])){

    require_once '../controller/ImovelController.php';

    call_user_func(array('ImovelController','salvar'));
}

?>