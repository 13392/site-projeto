<?php

//session_start();

if ($_GET['comando'] && $_GET['save']) {
    $comando = rawurlencode($_GET['comando']);
    $save = rawurlencode($_GET['save']);
    $conteudo = file_get_contents("http://localhost:****/{$comando}/{$save}");
} else if(isset($_GET['comando'])) {
    $comando = rawurlencode($_GET['comando']);
    $conteudo = file_get_contents("http://localhost:****/{$comando}");
} else {
    $conteudo = file_get_contents("http://localhost:****");
}


$arrayAssociativo = json_decode($conteudo);


//$_SESSION['historico'] = isset($_SESSION['historico']) ? array_merge($_SESSION['historico'], $arrayAssociativo->messages) : [];


include "template.phtml";