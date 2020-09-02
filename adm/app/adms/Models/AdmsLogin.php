<?php

namespace App\adms\Models;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;
/**
 * Description of AdmsLogin
 *
 * @author paulo
 */
class AdmsLogin extends Conn
{

    private $conn;
    private $dados;
    private $resultadoBd;
    private $resultado = false;
    
    function getResultado(): bool {
        return $this->resultado;
    }
    
    public function login(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT id, nome, email, senha FROM usuarios WHERE email =:email LIMIT 1";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(':email', $this->dados['usuario'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
      //  var_dump($this->resultadoBd);
        if($this->resultadoBd){
            $this->validarSenha();
        }else{
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Usuário não encontrado!</div>';
            $this->resultado = false;
        }  
    }
    
    private function validarSenha() {
    if(password_verify($this->dados['senha'], $this->resultadoBd['senha'])){
        $_SESSION['usuario_id'] = $this->resultadoBd['id'];
        $_SESSION['usuario_nome'] = $this->resultadoBd['nome'];
        $_SESSION['usuario_email'] = $this->resultadoBd['email'];
        $this->resultado = true;
    }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Usuário ou senha incorreta!</div>';
        $this->resultado = false;
        }
    }

}
