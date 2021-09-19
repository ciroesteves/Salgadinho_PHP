<html>
    <head>
        <meta charset="UTF=8" />
        <title>Fábrica de Salgados</title>
        <link rel="stylesheet" href="CSS/MainCSS.css" />
        <link rel="icon" href="Imagens/icon.png" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <!-- Navegador -->
        <nav>
            <ul>
                <li><a href="#top">Início</a></li>
                <li><a href="#gal">Salgados</a></li>
                <li><a href="#form">Pedido</a></li>
            </ul>
        </nav>
        <!-- Abertura -->
        <div id="top">  
            <div>
                <h1 class="anuncio">Fábrica de Salgados</h1>
            </div>
            <div>
            <img src="Imagens/icon.png" alt="Icone" title="Icone" />
            <h2 class="anuncio">Venha fazer sua encomenda conosco!</h2>
            <h4 class="anuncio">Salgados para Aniversários, Casamentos, Reuniões, Comer Sozinho ou Saborear com Pessoas Queridas.</h4>
            </div>
        </div>
        <!-- Imagens em sequência -->
        <div id="gal">
            <img class="foto" src="Imagens/bolinha_queijo.jpg">
            <img class="foto" src="Imagens/empadinha.jpg">
            <img class="foto" src="Imagens/mini_pastel.jpg">
            <img class="foto" src="Imagens/mini_churros.jpg">
        </div>
        <!-- Formulário do pedido -->
        <div id="form">
            <form action="PedidoFinalizado.php" method="POST">
                <div>
                    <label>Nome Completo</label><input id="nome" type="text" name="nome" size="20" maxlength="20" required placeholder="Nome Completo"/><br />
                    <label>Telefone</label><input id="telefone" type="text" name="telefone" size="20" maxlength="17" required placeholder="Telefone"/><br />
                </div>
                <div class="divform1">
                    <label>Quibe</label><input id="quibe" name="quibe" type="number" min="0" placeholder="Quantidade"/>
                </div>
                <div class="divform1">
                    <label>Coxinha</label><input id="coxinha" name="coxinha" type="number" min="0" placeholder="Quantidade"/>
                </div>
                <div class="divform1">
                    <label>Bolinha de Queijo</label><input id="bolinha" name="bolinha" type="number" min="0" placeholder="Quantidade"/>
                </div>
                <div class="divform1">
                    <label>Mini-Pastel</label><input id="pastel" name="pastel" type="number" min="0" placeholder="Quantidade"/>
                </div>
                <div class="divform1">
                    <label>Empadinha</label><input id="empadinha" name="empadinha" type="number" min="0" placeholder="Quantidade"/>
                </div>
                <div class="divform1">
                    <label>Mini-Churros</label><input id="churros" name="churros" type="number" min="0" placeholder="Quantidade"/>
                </div>
                <div class="divform">
                    <input type="radio" name="frete" value="entregar"/>Entregar
                    <input type="radio" name="frete" value="buscar" required/>Retirado no Local
                <div class="divform">
                    <input class="botao" type="submit" value="Finalizar Pedido" />
                    <input class="botao" type="reset" value="Limpar"/>
                </div>
            </form>
        </div>
    </body>
</html>