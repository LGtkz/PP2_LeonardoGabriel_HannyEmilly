<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2048</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <META http-equiv="Content-Type" content="text/html; charset= ISO-8859-1">
</head>

<body>
<?php
    include("header.php");
    ?>
    <h1>Atendimento ao jogador</h1>
    <div class="formulario">
        <p for="obrigatorio" id="ob">Campos com * são obrigatórios</p>
        <form action="enviaBanco.php" method="post">
            <fieldset>
                <div class="camposLegais">
                    <div>
                        <label for="nome">Nome*</label>
                        <input type="text" id="nome" name="nome" placeholder="Nome completo">
                        <span id="spanNome"></span>
                    </div>
                    <div>
                        <label for="email">E-mail*</label>
                        <input type="email" name="email" id="email" placeholder="email">
                        <span id="spanEmail"></span>
                    </div>
                    <div>
                        <label for="idade">Idade*</label>
                        <input type="number" name="idade" id="idade" placeholder="Digite sua idade">
                        <span id="spanIdade"></span>
                    </div>
                </div>
                <div>
                    <label for="sexo">Sexo:*</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="feminino" name="sexo" value="feminino">
                    <label for="feminino">Feminino</label>
                    <span id="sexoSpan"></span>
                </div>
                <div>
                    <label for="tipo">Selecione o tipo de contato:</label>
                    <div>
                        <input type="checkbox" id="duvida" name="tipo[]" value="duvida">
                        <label for="duvida">Dúvida</label>
                    </div>
                    <div>
                        <input type="checkbox" id="reclamacao" name="tipo[]" value="reclamacao">
                        <label for="reclamacao">Reclamação</label>
                    </div>
                    <div>
                        <input type="checkbox" id="critica-construtiva" name="tipo[]" value="critica-construtiva">
                        <label for="critica-construtiva">Crítica construtiva</label>
                    </div>
                    <div>
                        <input type="checkbox" id="encontrei-bug" name="tipo[]" value="encontrei-bug">
                        <label for="critica-construtiva">Encontrei um bug</label>
                    </div>
                    <div class="alert alert-warning" role="alert" id="alerta">
                        tem certeza que não deseja selecionar nenhum?
                    </div>
                </div>
                <div class="textArea">
                    <textarea name="textarea" id="txA" cols="30" rows="10" placeholder="Digite aqui"></textarea>
                    <span id="txSpan"></span>
                </div>
                
                <button id="btn" type="button">Enviar</button>
    
                <div class="modal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Informações</h5>
                        </div>
                        <div class="modal-body" style="display: flex; flex-direction: column;">
                            <span id="nomeModal"></span>
                            <span id="idadeModal"></span>
                            <span id="emailModal"></span>
                            <span id="sexoModal"></span>
                            <span id="contatoModal"></span>
                            <span id="textModal"></span>
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" id="limpa">Limpar</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Editar</button>
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </div>
                    </div>
                  </div>
        </form>
        </fieldset>
    </div>
    <?php  include("footer.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="js/form.js"></script>
</html>