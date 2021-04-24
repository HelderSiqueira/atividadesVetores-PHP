<?php 

$cidades = [

    1 => "Jandira",
    2 => "Itapevi",
    3 => "Barueri",
    4 => "Osasco",
    5 => "Cotia",
    6 => "Santana de Parnaíba",
    7 => "Carapicuíba",
    8 => "São Paulo",

];
 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio05 - Vetores</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>
<body>
<form method="POST" action="exercicio05.php">
    <div class = "input-group">
        <label for="nome">Nome</label>
        <input type="text " name="nome" id="nome " placeholder="Digite seu nome" />
    </div>
    <div class = "input-group">
        <label for="cidade">Cidade</label>
        <select  name="cidade" id="cidade"> 
        <option value=""> SELECIONE </option>
        <?php
            foreach ($cidades as  $key => $cidade) {
        ?>
            <option value="<?= $key ?>"><?= $cidade ?></option>
       <?php
        }
       ?>
        </select>
    </div>
    <button>Enviar</button>
        <?php
         $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
         $cidade = isset($_POST["cidade"])  ? $_POST["cidade"] : "";

            if ($nome != "" && $cidade != "") {
        ?>
            <h3>Olá <?= $nome ?> de <?= $cidades[$cidade] ?>, seja bem-vindo!</h3>
         <?php
         }
         ?>
</form>
</body>
</html>