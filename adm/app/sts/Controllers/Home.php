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
class Home {
    
    public function index() {
       echo "PG home<br>";
        
    }
}
