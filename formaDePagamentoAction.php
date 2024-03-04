<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./style.css">
  <title>Madeira e Cia LTDA - Forma de Pagamento</title>
</head>
<body>
  <div class="bg">
    <div class="w3-container w3-teal w3-center">
      <h2>Forma de pagamento confirmada</h2>
      <h3>PROMOÇÃO MÊS DE ANIVERSÁRIO</h3>
      <div class="w3-container w3-white">
        <?php
          $nomeCliente = $_POST['txtNome'];
          $valorCompra = $_POST['txtValorCompra'];
          $meioPagamento = $_POST['cmbPag'];

          if ($meioPagamento == "cartaoCredito"){
            $desconto = 0;
            $meioPagamentoPrint = "Cartão de Crédito";
            $mensagemPersonalizada ="Compras com Cartão de Crédito não dão desconto. Você pode voltar e escolher outra forma.<br>";
          }
          elseif ($meioPagamento == "boleto"){
            $desconto = 8;
            $meioPagamentoPrint = "Boleto";
            $mensagemPersonalizada ="Desconto de: ".$desconto."%;<br>";
          }
          elseif ($meioPagamento == "deposito"){
            $desconto = 10;
            $meioPagamentoPrint = "Depósito";
            $mensagemPersonalizada ="Desconto de: ".$desconto."%;<br>";
          }

          echo "<h4>".$nomeCliente."!<h4>";
          echo "Valor da compra sem desconto: R$ ".number_format($valorCompra,2,",",".").";<br>";
          echo "Forma de pagamento escolhida: ".$meioPagamentoPrint.";<br>";
          echo $mensagemPersonalizada;
          
          $descontoTotal = $valorCompra*$desconto/100;
          $valorFinal = $valorCompra-$descontoTotal;

          echo "Você economizou R$ ".number_format($descontoTotal,2,",",".").";<br>";
          echo "Valor à pagar R$ ".number_format($valorFinal,2,",",".").".";

        ?>
      </div>
      <div class="w3-container">
        <button class='w3-round-xlarge w3-margin-top w3-margin-bottom w3-btn w3-block w3-white' onClick='history.go(-1)'>Voltar</button>
        <button class="w3-round-xlarge w3-margin-top w3-margin-bottom w3-btn w3-block w3-white" onclick=confirmation()>Confirmar</button>
      </div>
      <div id="compraConfirmada" class="compraConfirmada w3-container w3-white">
        <h2>Parabéns, sua compra foi confirmada com sucesso!</h2>
      </div>
    </div>
  </div>
  <footer class="w3-display-bottommiddle w3-teal w3-center">
    <h5 class="w3-xxlarge">Desenvolvido por Humberto de França Santos</h5>
    <h5 class="w3-xxlarge">ETEC - DS II - Agenda 03 - PHP - GET e POST</h5>
  </footer>
  <script>
    function confirmation() {
      document.getElementById("compraConfirmada").style.display = "block";
    }
  </script>
  </body>
</html>