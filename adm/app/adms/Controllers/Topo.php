<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Description of Topo
 *
 * @author paulo
 */
class Topo {
   
   private $dados;
   private $dadosForm;
   
   public function index() {
       
       $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      // var_dump($this->dadosForm);
       if(!empty($this->dadosForm['EditTopoHome'])){
           $editTopo = new \App\adms\Models\AdmsViewTopo();
           if($editTopo->editTopo($this->dadosForm)){
               $urlDestino = URLADM . "view";
               header("Location: $urlDestino");
           }else{
               $this->dados['topo'] = $this->dadosForm;
               $this->viewTopo();
           }   
     }else{
         $this->dadosTopo();
         $this->viewTopo();
     }

   }
   
    private function dadosTopo(){
       $viewTopo = new \App\adms\Models\AdmsViewTopo;
       $this->dados['topo'] = $viewTopo->viewTopo();
    }
    
    private function viewTopo(){
        $carregarView = new \Core\ConfigView("adms/Views/pgHome/editPgHomeTopo", $this->dados);
        $carregarView->renderizar();
    }
    

   
}
