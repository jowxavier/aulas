<?php
/* include('Classe2.class.php');

$classe2 = new Classe2();
$classe2->setNome('Jonathan');
$classe2->setSobrenome('Xavier Ribeiro');
echo "{$classe2->getNome()} => {$classe2->getSobrenome()}"; */


//Polimorfismo
//include('Televisao.class.php');

/* $televisao = new Televisao();
echo $televisao->ligar('Ligar Televisão'); */

include('Geladeira.class.php');
$geladeira = new Geladeira();
echo $geladeira->ligarGeladeira("Ligar Geladeira");

// https://www.devmedia.com.br/os-4-pilares-da-programacao-orientada-a-objetos/9264