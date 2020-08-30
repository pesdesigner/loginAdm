<?php
namespace App\sts\Controllers;

if(!defined('R4F5CC')){
   header("Location: /");
   die("Erro: Página não encontrada!");
}
/**
 * Description of Home
 *
 * @author paulo
 */
class Contato {
    
    private $dados;
    
    public function index() {
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $cadMsg = new \App\sts\Models\stsCadMsg();
        if($cadMsg->cadMsg($this->dados)){
            echo true;
        }else{
            echo false;
        }
    }
}
