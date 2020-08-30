<?php
namespace App\sts\Models;

if(!defined('R4F5CC')){
   header("Location: /");
   die("Erro: Página não encontrada!");
}
/**
 * Description of StsHome
 *
 * @author paulo
 */
class StsHome extends Conn {
    
    private $conn;
    private $dados;
    public function index(){
        
        $this->conn = $this->connect();
        $this->viewTopo();
        $this->viewServ();
        $this->viewAcao();
        $this->viewContato();
        $this->viewRodape();
        return $this->dados;
    }
    
    private function viewTopo(){
        $query_home_topo = "SELECT titulo_topo, subtitulo_topo, text_btn_topo, link_btn_topo,"
        . " imagem_topo FROM homes_topos LIMIT 1";
        $result_home_topo = $this->conn->prepare($query_home_topo);
        $result_home_topo->execute();
        $this->dados['topo'] = $result_home_topo->fetch();           
    }
    
    private function viewServ(){
    $query_serv = "SELECT titulo_serv, subtitulo_serv, icone_um_serv, titulo_um_serv, desc_um_serv,"
    . " icone_dois_serv, titulo_dois_serv, desc_dois_serv, icone_tres_serv, titulo_tres_serv,"
    . " desc_tres_serv FROM homes_servicos LIMIT 1";
    $result_serv = $this->conn->prepare($query_serv);
    $result_serv->execute();
    $this->dados['serv'] = $result_serv->fetch();           
    }
    
    private function viewAcao(){
    $query_acao = "SELECT titulo_acao, subtitulo_acao, desc_acao, text_btn_acao, "
    . " link_btn_acao, imagem_acao FROM homes_acoes LIMIT 1";
    $result_acao = $this->conn->prepare($query_acao);
    $result_acao->execute();
    $this->dados['acao'] = $result_acao->fetch();           
    }
    
    private function viewContato(){
    $query_contato = "SELECT titulo_contato, subtitulo_contato, end_contato, tel_contato, "
    . " email_contato FROM homes_contatos LIMIT 1";
    $result_contato = $this->conn->prepare($query_contato);
    $result_contato->execute();
    $this->dados['contato'] = $result_contato->fetch();           
    }
    
    private function viewRodape(){
    $query_rodape = "SELECT titulo_pg, titulo_contato, txt_telefone, link_telefone, "
    . "txt_end, link_end, link_cnpj, titulo_rede_soc, txt_um_rede_soc, link_um_rede_soc, "
    . "txt_dois_rede_soc, link_dois_rede_soc, txt_tres_rede_soc, link_tres_rede_soc, "
    . " txt_quatro_rede_soc, link_quatro_rede_soc FROM rodapes LIMIT 1";
    $result_rodape = $this->conn->prepare($query_rodape);
    $result_rodape->execute();
    $this->dados['rodape'] = $result_rodape->fetch();           
    }
}
