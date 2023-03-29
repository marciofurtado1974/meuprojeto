<!doctype html>
<form action="script.php" method="post">
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">

        <!-- Título da página (aparece na aba) -->
        <title>Cadastro</title>
    </head>

    <body>  

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Gestão de Condomínios</h1>
            <!--p id="subtitulo">Complete suas informações</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form>

            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="Nome1" id="nome" required>
                </div>

                <!-- Campo do senha com legenda "senha" e css de classe "campo" -->
                <div class="campo">
                    <label for="Senha"><strong>Senha</strong></label>
                    <input type="hidden" name="Senha2" id="Senha" required>
                </div>
            </fieldset> 

			 <!-- Botão para enviar o formulário -->
 			<br>
 			<button class="botao2" type="submit" onsubmit="">Confirma</button>   

			</form>

</body>

</html>
