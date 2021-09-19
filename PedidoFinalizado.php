<html>
    <head>
        <title>Fábrica de Salgados</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/pedido_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="Imagens/icon.png" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <?php

            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $quibe = $_POST["quibe"];
            $coxinha = $_POST["coxinha"];
            $bolinha = $_POST["bolinha"];
            $pastel = $_POST["pastel"];
            $empadinha = $_POST["empadinha"];
            $churros = $_POST["churros"];

            $preco_quibe = 8.00;
            $preco_coxinha = 7.50;
            $preco_bolinha = 5.00;
            $preco_pastel = 4.50;
            $preco_empadinha = 8.00;
            $preco_churros = 6.50;

            $lista = array(
                array("Quibe", $quibe, $preco_quibe),
                array("Coxinha", $coxinha, $preco_coxinha),
                array("Bolinha de Queijo", $bolinha, $preco_bolinha),
                array("Mini-Pastel", $pastel, $preco_pastel),
                array("Empadinha", $empadinha, $preco_empadinha),
                array("Mini-Churros", $churros, $preco_churros)
            );

            $i=0;
            echo '<img src="Imagens/icon.png" alt="Icone" title="Icone" />';
            echo "<div class='finalPedido'><p>Cliente: ".$nome." - Fone: ".$telefone."</p>";
            echo "Confira seu pedido<br/>";
            echo "Salgado: ";
            do{
                if($lista[$i][1] != null){
                    echo $lista[$i][0]." - Valor unitário: R$".number_format($lista[$i][2], 2, ',', '.')." - Quantidade: ".$lista[$i][1]."<br/>";
                }
                $i++;
            }while($i<6);

            $quant = 0;
            $total = 0;
            for($i=0; $i<6; $i++){
                if($lista[$i][1] != null){
                    $item = $lista[$i][1]*$lista[$i][2];
                    $total = $total + $item;
                    $quant = $quant + $lista[$i][1];
                }
            };

            $desconto = 0;
            if($quant == 3){
                $desconto = 0.02*$total;
            } elseif($quant > 3) {
                $desconto = 0.05*$total;
            }
            echo "Desconto: R$".number_format($desconto, 2, ',', '.')."<br/>";

            $opcao = $_POST["frete"];
            if($opcao == "entregar"){
                $frete = 5;
            } else {
                $frete = 0;
            };

            $total = $total + $frete - $desconto;
            echo "Total a ser pago: R$".number_format($total, 2, ',', '.')."<br/><br/>";
            echo '<a href="index.php"><button class= "botao">Ok!</button></a><br/></div>';
            echo '<img src="Imagens/icon.png" alt="Icone" title="Icone" />';

        ?>
    </body>
</html>