<?php
if ($_POST) {
    echo 'gravar';
} else {
    if ($_GET['edit']) {
        echo 'alterar';
    } else {
        echo 'remover';
    }
}