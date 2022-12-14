<?php

        $conexao = mysqli_connect("127.0.0.1", "root","", "mirrorfashion");
        $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
        $produto = mysqli_fetch_array($dados);

        $cabecalho_title = $produto['nome'];
        $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';

        include("cabecalho.php");
    ?>   
        <div class="produto-back">
            <div class="container">
                <div class="produto">
                <h1><?= $produto['nome'] ?></h1>
                <p>por apenas <?= $produto['preco'] ?></p>
                    <form action="checkout.php" method="POST">
                        <fieldset class="cores">
                            <legend>Escolha a cor:</legend>
                            <input type="radio" name="cor" value="verde" id="verde" checked>
                            <label for="verde">
                                <img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Produto na cor verde">
                            </label>
                            <input type="radio" name="cor" value="rosa" id="rosa">
                            <label for="rosa">
                                <img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="Produto na cor rosa">
                            </label>
                            <input type="radio" name="cor" value="azul" id="azul">
                            <label for="azul">
                                <img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Produto na cor azul">
                            </label>
                        </fieldset>
                        <fieldset class="tamanhos">
                            <legend>Escolha o tamanho:</legend>
                            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                            <output for="tamanho" name="valortamanho">42</output>
                        </fieldset>
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                        <input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
                        <input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
                        <button class="comprar">Comprar</button>
                    </form>
                </div>
                <div class="detalhes">
                    <h2>Detalhes do produto</h2>
                    <p><?= $produto['descricao'] ?></p>
                    <table>
                        <thead>
                            <tr>
                                <th>Caracter??stica</th>
                                <th>Detalhe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>Cardig?? 7845</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Algod??o e poliester</td>
                            </tr>
                            <tr>
                                <td>Cores</td>
                                <td>Azul, Rosa e Verde</td>
                            </tr>
                            <tr>
                                <td>Lavagem</td>
                                <td>Lavar a m??o</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include("rodape.php"); ?>
        <script type="text/javascript" src="js/produto.js"></script>
    </body>
</html>