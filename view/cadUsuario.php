<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post" class="form">
        <div>
        <label class="label">Login:</label> <br/>
        <input type="text" name="login" id="login" class="inputs"><br/>

        <label class="label">Senha:</label>
       <br/>
        <input type="password" name="senha1" id="senha1" class="inputs"><br/>

        <label class="label">Confirmação da Senha:</label>
        <br/>
        <input type="password" name="senha2" id="senha2" class="inputs"><br/> 

        <label class="label">Selecione o tipo de usuário:</label>
        <br/>
        <select name="permissao" id="permissao" class="select">
        <option value="0"></option>
        <option value="A">Administrador</option>
        <option value="C">Comum</option>
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

    require_once '../controller/UsuarioController.php';

    call_user_func(array('UsuarioController','salvar'));
}

?>