<?php 

$filme = [
    "nome" => $_POST["nome"],
    "ano" => $_POST["ano"],
    "duracao" => $_POST["duracao"],
    "genero" => $_POST["genero"]
];

header("Location: sucesso.php?nome=".$filme["nome"]."&ano=".$filme["ano"]."&duracao=".$filme["duracao"]."&genero=".$filme["genero"]);

$filmeEmJson = json_encode($filme);
file_put_contents("./filme.json", $filmeEmJson);