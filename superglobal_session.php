<?php
// indica o uso de sessão
session_start();

// Cria a sessão
$_SESSION['aula'] = 'aula 2';

// Exibe sessão
echo $_SESSION['aula'];

// Remove a sessão
//session_destroy();