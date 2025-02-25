<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <title>Maromba Fit</title>
  <style>

  </style>
</head>

<body>
  <header>
    <h1>Maromba Fit</h1>

    <img src="imagens/pngegg.png" alt="">

    <form action="/pesquisa" method="get">
      <input id="barra" type="text" name="q" placeholder="Pesquisar...">
      <button id="botaobarra" type="submit">Buscar</button>
    </form>
  </header>

  <nav>
    <a href="#">Login</a>
    <a href="#">Registrar</a>
  </nav>

  <main>
    <div class="textomain">
      <h2>Registre-se</h1>
        <p>Coloque suas informações logo abaixo</p>
    </div>

    <div class="formularios">
      <form action="calc.php" method="post">
        <input type="text" placeholder="Nome" name="name" id="idname" required>
        <input type="text" placeholder="Sobrenome" name="surname" id="idsurname" required>
        <input type="date" placeholder="Data de nascimento" name="bith" id="idbith">
        <input type="tel" placeholder="Telefone" name="number" id="idnumber" required>
        <input type="text" placeholder="Peso" name="peso" id="idpeso">
        <input type="text" placeholder="Altura" name="altura" id="idaltura">
      </form>
      <form name="post" action="calc.php" method="post" enctype="multipart/form-data">
        <input class="arquivo" type="file" name="file" required />
        <button id="idbotao">Enviar</button>
      </form>
    </div>

  </main>

  <footer>
    <div class="container">
      <div class="info-contato">
        <h3>Contato</h3>
        <p>Endereço: Rua Exemplo, 123</p>
        <p>Telefone: (11) 1234-5678</p>
        <p>Email: contato@exemplo.com</p>
      </div>
      <div class="links-uteis">
        <h3>Links Úteis</h3>
        <ul>
          <li><a href="">Sobre Nós</a></li>
          <li><a href="">Política de Privacidade</a></li>
          <li><a href="">Termos de Uso</a></li>
        </ul>
      </div>
      <div class="midias-sociais">
        <h3>Siga-nos</h3>
        <a href="#"><img src="imagens/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="imagens/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="imagens/instagram.png" alt="Instagram"></a>
      </div>
      <div class="direitos-autorais">
        <p>© 2025 Exemplo. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>
</body>

</html>