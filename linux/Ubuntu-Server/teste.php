<?php
// Função para obter a hora atual
function getCurrentTime() {
    date_default_timezone_set('America/Sao_Paulo'); // Definir o fuso horário para o Brasil
    return date('H:i:s'); // Hora, minutos e segundos
}

// Função para exibir o HTML completo
function displayPage() {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <title>UNDERTALE</title>
      <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Undertale.png/1024px-Undertale.png">
      <style>
        body {
          background-color: #ADD8E6; /* Azul claro */
          font-family: "Comic Sans MS", "Comic Sans", cursive;
          text-align: center;
          padding: 20px;
        }

        h1 {
          background-color: #1E90FF; /* Azul intenso */
          color: white;
          padding: 10px;
          border-radius: 10px;
        }

        p {
          background-color: #87CEEB; /* Azul céu */
          color: #00008B; /* Azul escuro */
          padding: 10px;
          border-radius: 10px;
          font-size: 18px;
        }

        .gif {
          margin: 20px 0;
        }

        .relogio {
          font-size: 48px;
          font-weight: bold;
          color: #00008B; /* Azul escuro */
        }

        .link {
          margin-top: 20px;
          display: inline-block;
          padding: 10px 20px;
          background-color: #1E90FF;
          color: white;
          font-size: 20px;
          text-decoration: none;
          border-radius: 10px;
        }

        .link img {
          vertical-align: middle;
          margin-right: 10px;
        }

        /* Estilo para aumentar o GIF de Waterfall */
        .waterfall-gif {
          width: 80%; /* Define a largura do GIF em 80% do tamanho da tela */
          max-width: 800px; /* Define a largura máxima para não ficar exagerado */
        }
      </style>
      <script>
        // Função para atualizar o relógio sem recarregar a página
        function updateClock() {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'relogio.php', true); // Requisição ao arquivo PHP
          xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
              document.getElementById('relogio').innerHTML = xhr.responseText;
            }
          };
          xhr.send();
        }

        setInterval(updateClock, 1000); // Atualizar a cada segundo
      </script>
    </head>
    <body>

      <h1>UNDERTALE</h1>
      <p>WaterFall</p>

      <!-- GIF do Pinterest com tamanho aumentado -->
      <div class="gif">
        <object data="https://media.tenor.com/tlj04wi5qxQAAAAM/undertale-castle.gif" type="image/gif" class="waterfall-gif"></object>
      </div>

      <!-- GIF do Camo (GitHub) -->
      <div class="gif">
        <object data="https://camo.githubusercontent.com/8f98306fe4fb31c97de427a034267a6e67d5c87734e4b7706c126357751d5231/68747470733a2f2f6d656469612e74656e6f722e636f6d2f617761764c644c4458643841414141692f686f692d74656d6d69652e676966" type="image/gif"></object>
      </div>

      <!-- Relógio -->
      <div id="relogio" class="relogio">
        <?php echo getCurrentTime(); ?> <!-- Exibe a hora inicial -->
      </div>

      <!-- Hiperlink para a outra página com ícone de Undertale -->
      <a href="http://10.26.44.226/paulo/" class="link">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Undertale.png/1024px-Undertale.png" alt="Undertale" width="30" height="30">
        Vá para a outra página
      </a>

    </body>
    </html>
    <?php
}

// Exibe a página
displayPage();
?>
