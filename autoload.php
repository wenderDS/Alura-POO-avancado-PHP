<?php
spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace(
        'Alura\\Banco',
        'src',
        subject: $nomeCompletoDaClasse
    );
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, subject: $caminhoArquivo);
    $caminhoArquivo .= ".php";

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});