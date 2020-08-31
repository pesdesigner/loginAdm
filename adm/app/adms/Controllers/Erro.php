<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Description of Erro
 *
 * @author paulo
 */
class Erro
{
    public function index() {
        echo "Página erro<br>";
    }
}
