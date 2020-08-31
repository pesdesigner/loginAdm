<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Description of Home
 *
 * @author paulo
 */
class Home
{
    
    public function index() {     
        $carregarView = new \Core\ConfigView("adms/Views/home/home");
        $carregarView->renderizar();
    }
}
