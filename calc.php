

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
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
    <?php
        $dados = [
        
                'nome' => 'exemplo',
                'sobrenom' => 'exemplo',
                'niver' => 00000000,
                'numero' => 00000000000,
                'peso' => 00,
                'altura' => 0.00
        
        ];

        $dados["nome"] = $_POST["name"];
        $dados["sobrenom"] = $_POST["surname"];
        $dados["niver"] = $_POST["bith"];
        $dados["numero"] = $_POST["number"];
        $dados["peso"] = $_POST["peso"];
        $dados["altura"] = $_POST["altura"];

        $imc = $dados['peso'] / ($dados['altura'] * $dados['altura']);

        $folder = _DIR_ . "/uploads/";
        if (!file_exists($folder) || !is_dir($folder)) {
            mkdir($folder, 0755);
        }
        var_dump([
            "filesize" => ini_get("upload_max_filesize"),
            "postsize" => ini_get("post_max_size"),
        ]);
        $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
        var_dump($_FILES);
        if ($_FILES && !empty($_FILES['file']['name'])) {
            $fileUpload = $_FILES['file'];
            var_dump($_FILES);
            echo "<img src='$fileUpload'>";
            $allowebTypes = [
                "image/jpeg",
                "image/png",
                "application/pdf",
                "application/doc",
                "audio/mp3",
                "video/mp4"
            ];
        } elseif ($getPost) {
            echo "<p class='trigger warning'>Whoops parece que o arquivo que você selecionou é grande demais!</p>";
        } else {
            if ($_FILES) {
                echo "<p class='trigger warning'>Selecione um arquivo antes de Enviar!</p>";
            }
        }
        include _DIR_ . "/form.php";
        var_dump(scandir(_DIR_ . "/uploads"));
        ?>
    <div class="resultado">
        <p class="nome"><?php echo $dados['nome'] . " ";?></p>
        <p class="sobrenome"><?php echo $dados['sobrenom'] . " <br>";?></p>
        <p class="niver"><?php echo $dados['niver'] . " <br>";?></p>
        <p class="numero"><?php echo $dados['numero'] . " <br>";?></p>
        <p class="imc"><?php echo "Seu IMC é: " . number_format($imc, 2) . "<br>";?></p>
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