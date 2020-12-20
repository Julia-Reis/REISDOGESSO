<?php
include "cabecalho.php";
echo'
    <div class="card" id="telaCadastrar">
        <div class="card-body" id="form_cadastro">
            <form method="POST" action="cadastrar.php">
                <div class="text-center">
                    <img id="img_cadastrar" class="mb-4 mx-auto" src="img/favicon.png" alt="Logo Reis do Gesso" width="72" height="72">
                </div>
                <h1 class="h3 mb-3 text-center">Cadastrar</h1>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome e sobrenome" required autofocus>
                
                <input type="number" id="telefone" name="telefone" class="form-control" placeholder=" DDD + numero" required autofocus>
                
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" maxlenght="11" required autofocus>

                <input type="password" id="senha" name="senha" maxlength="15" class="form-control" placeholder="senha" required>
                <br>
                <div class="botao_login_cadastrar">
                    <button type="submit" id="cadastrar" class="btn btn-info">Cadastrar</button>
                </div>
                <br>
            </form>
        </div>
    </div>';

include "rodape.php";
?>