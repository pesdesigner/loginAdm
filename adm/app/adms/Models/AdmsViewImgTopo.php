<?php

namespace App\adms\Models;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
use PDO;
/**
 * Description of AdmsViewimgTopo
 *
 * @author paulo
 */
class AdmsViewImgTopo extends conn {
    private $conn;
    private $dados;
    
    public function viewImgTopo(){
    $this->conn = $this->connect();      
    $query_home_topo = "SELECT id, imagem_topo FROM homes_topos LIMIT 1";
    $result_home_topo = $this->conn->prepare($query_home_topo);
    $result_home_topo->execute();
    $this->dados = $result_home_topo->fetch();           

     return $this->dados;
    }
    
    public function editImgTopo($dados) {
        $this->dados = $dados;
        $this->conn = $this->connect();
   
        $query_topo = "UPDATE homes_topos SET imagem_topo=:imagem_topo, modified=NOW() WHERE id=:id";
        $edit_topo = $this->conn->prepare($query_topo);
        $edit_topo->bindParam(':imagem_topo', $this->dados['imagem_nova']['name']);
        $edit_topo->bindParam(':id', $this->dados['id'], PDO::PARAM_INT);
        $edit_topo->execute();
        
        if($edit_topo->rowCount()){
     
         if($this->upload()){
            $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Imagem editada com sucesso!</div>';
            return true;
         }else{
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Ao tentar editar a imagem!</div>';
            return false;
         }   
        }else{
   $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Ao tentar editar a imagem!</div>';
            return false;
        } 
    }
    
    private function upload(){
        //diretório para salvar imagens
        $diretorio = "app/adms/assets/imagens/home_topo/";
        
        if(move_uploaded_file($this->dados['imagem_nova']['tmp_name'], $diretorio . $this->dados['imagem_nova']['name'])){
            $this->apagarImagem();
            return true;
        }else{
            return false;          
        }
    }
    
    private function apagarImagem() {
      //  var_dump($this->dados);
        $img_antiga = "app/adms/assets/imagens/home_topo/". $this->dados['imagem_topo'];
        unlink($img_antiga);
    }
    
}
