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
      <h2>Forma de pagamento</h2>
  
    </div>
  
    <form class="w3-container" method="post" action="formaDePagamentoAction.php">
      <label class="w3-text-teal"><b>Nome do Cliente</b></label>
      <input class="w3-input" name="txtNome" type="text">
  
      <label class="w3-text-teal"><b>Valor  da Compra</b></label>
      <input class="w3-input" name="txtValorCompra" type="number">
  
      <label class="w3-text-teal"><b>Escolha a forma de Pagamento:</b></label>
      <select class="w3-input"  name = "cmbPag">
        <option value="cartaoCredito">Cartão de Crédito</option>
        <option value="boleto">Boleto</option>
        <option value="deposito" selected>Depósito</option>
    </select><br>
  
    <button class="w3-round-xlarge w3-margin-top w3-margin-bottom w3-btn w3-block w3-teal">Enviar</button>
  
    </form>
  </div>
  <footer class="w3-display-bottommiddle w3-teal w3-center">
    <h5 class="w3-xxlarge">Desenvolvido por Humberto de França Santos</h5>
    <h5 class="w3-xxlarge">ETEC - DS II - Agenda 03 - PHP - GET e POST</h5>
  </footer>
  </body>
</html>