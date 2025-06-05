<?php

function incluirFuncoesComRequire() {
    require 'funcoes.php';
}

function incluirFuncoesComRequireOnce() {
    require_once 'funcoes_once.php';
}

if (!function_exists('minhaFuncao')) {
    function minhaFuncao() {
        echo "Função executada!<br>";
    }
}

if (!function_exists('minhaFuncaoOnce')) {
    function minhaFuncaoOnce() {
        echo "Função com require_once executada!<br>";
    }
}

echo "<strong>🔴 Tentando incluir função com require duas vezes:</strong><br>";
require 'funcoes.php';
require 'funcoes.php';

minhaFuncao();

echo "<br><strong>🟢 Tentando incluir função com require_once duas vezes:</strong><br>";
require_once 'funcoes_once.php';
require_once 'funcoes_once.php';

minhaFuncaoOnce();
?>
