<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na Rede Social</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/style.css" rel="stylesheet">

</head>
<body>
    <div class="sidebar"></div>

    <div class="form-container-login">
        <div class="logo-chamada-login">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" />
            <p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social Danki Code.</p>
        </div><!--logo-chamada-login-->

        <div class="form-login">
            <form>
                <input type="text" name="login">
                <input type="password" name="senha">
                <input type="submit" name="acao" value="Logar!">
            </form>
            <p><a href="<?php echo INCLUDE_PATH?>registrar">Criar Conta</a></p>
        </div><!--form-login-->
    </div><!--form-container-login-->

</body>
</html>
