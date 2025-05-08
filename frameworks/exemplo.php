<?php

$diretorio = "php";
$arquivo = $diretorio . '/arquivo.php';

if (!file_exists($diretorio)) {
    if (!mkdir($diretorio, 0777, true)){
        echo "Erro: Diretório não criado";
    } else{
        echo "Diretório " . $diretorio. " criado";
    }
} else {
    echo 'o diretório.' . $diretorio . ' já existe';
}

$x = "Ola mundo";
$conteudo = <<<PHP
    <?php 

    ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
        class Teste{
            function __construct(){
                echo '$x';
            }
        }   
        new Teste();
        ?>

PHP;

if(file_put_contents($arquivo, $conteudo)===false){
    echo "ERRO: Não foi possivel criar o arquivo";
}else{
    echo $arquivo." foi criado";
}

?>