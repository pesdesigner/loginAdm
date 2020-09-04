<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Description of Topoimg
 *
 * @author paulo
 */
class Topoimg {
   
   private $dados;
   private $dadosForm;
   
   public function index() {
       
       $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      // var_dump($this->dadosForm);
       if(!empty($this->dadosForm['EditTopoImgHome'])){
        $this->dadosForm['imagem_nova'] = ($_FILES['imagem_nova'] ? $_FILES['imagem_nova'] : null);
   
           $editImgTopo = new \App\adms\Models\AdmsViewImgTopo();
           if($editImgTopo->editImgTopo($this->dadosForm)){
              $urlDestino = URLADM . "view";
             header("Location: $urlDestino");
           }else{
               $this->dados['topo'] = $this->dadosForm;
               $this->viewTopo();
           }   
           $this->dadosTopo();
           $this->viewTopo();
     }else{
         $this->dadosTopo();
         $this->viewTopo();
     }

   }
   
    private function dadosTopo(){
       $viewTopo = new \App\adms\Models\AdmsViewImgTopo;
       $this->dados['topo'] = $viewTopo->viewImgTopo();
    }
    
    private function viewTopo(){
        $carregarView = new \Core\ConfigView("adms/Views/pgHome/editPgHomeImgTopo", $this->dados);
        $carregarView->renderizar();
    }
    

   
}
