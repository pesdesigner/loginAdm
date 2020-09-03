<?php
if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>

<div class="container">

   <h1>Detalhes da página home</h1>
    <hr>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
  
    <div class="d-flex">
        <div class="mr-auto p-2">
           <h2>Detalhes do topo</h2>
        </div>
        <div class="p-2">
            <a href="<?php echo URLADM ?>topo" class="btn btn-warning btn-sm">Editar</a>
        </div>
    </div>
    
    <?php
    if (!empty($this->dados['home']['topo'])) {
        extract($this->dados['home']['topo']);
    ?>
    <dl class="row">
        
        <dt class="col-sm-3">Imagem</dt>
        <dd class="col-sm-9">
            <img src="<?php echo URLADM . 'app/adms/assets/imagens/home_topo/' . $imagem_topo; ?>" width="250" height="141">
     
        </dd>
        
        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_topo; ?></dd>

        <dt class="col-sm-3">Subtitulo</dt>
        <dd class="col-sm-9"><?php echo $subtitulo_topo; ?></dd>

        <dt class="col-sm-3">Texto do botão</dt>
        <dd class="col-sm-9"><?php echo $text_btn_topo; ?></dd>

        <dt class="col-sm-3">Link do botão</dt>
        <dd class="col-sm-9"><?php echo $link_btn_topo; ?></dd>
    </dl>    

<?php
    }else{
        echo '<div class="alert alert-danger" role="alert">Erro: O topo do site não possui nenhum registro!</div>';
    }

?>
    <hr>
    <h2>Detalhes dos Serviços</h2>
    
    <?php
    if (!empty($this->dados['home']['serv'])) {
        extract($this->dados['home']['serv']);
    ?>
    <dl class="row">
        
        
        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_serv; ?></dd>

        <dt class="col-sm-3">Subtitulo</dt>
        <dd class="col-sm-9"><?php echo $subtitulo_serv; ?></dd>
        
        <dt class="col-sm-3">Ícone do 1° serviço</dt>
        
        <dd class="col-sm-9">
            <i class="<?php echo $icone_um_serv; ?>"></i> - 
            <?php echo $icone_um_serv; ?>
        </dd>

        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_um_serv; ?></dd>

        <dt class="col-sm-3">Descrição</dt>
        <dd class="col-sm-9"><?php echo $desc_um_serv; ?></dd>
        
        <dt class="col-sm-3">Ícone do 2° serviço</dt>
        
        <dd class="col-sm-9">
            <i class="<?php echo $icone_dois_serv; ?>"></i> - 
            <?php echo $icone_dois_serv; ?>       
        </dd>

        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_dois_serv; ?></dd>

        <dt class="col-sm-3">Descrição</dt>
        <dd class="col-sm-9"><?php echo $desc_dois_serv; ?></dd>
        
        <dt class="col-sm-3">Ícone do 3° serviço</dt>
            
        <dd class="col-sm-9">
            <i class="<?php echo $icone_dois_serv; ?>"></i> - 
            <?php echo $icone_tres_serv; ?>
        </dd>

        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_tres_serv; ?></dd>

        <dt class="col-sm-3">Descrição</dt>
        <dd class="col-sm-9"><?php echo $desc_tres_serv; ?></dd> 
    </dl>    

<?php
    }else{
        echo '<div class="alert alert-danger" role="alert">Erro: Serviços do site não possui nenhum registro!</div>';
    }
?>
    <hr>
    <h2>Detalhes da Ação</h2>
    
    <?php
    if (!empty($this->dados['home']['acao'])) {
        extract($this->dados['home']['acao']);
    ?>
    <dl class="row">
        
        <dt class="col-sm-3">Imagem</dt>
        <dd class="col-sm-9">
            <img src="<?php echo URLADM . 'app/adms/assets/imagens/home_acao/' . $imagem_acao; ?>" width="250" height="141">
     
        </dd>
        
        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_acao; ?></dd>

        <dt class="col-sm-3">Subtitulo</dt>
        <dd class="col-sm-9"><?php echo $subtitulo_acao; ?></dd>
        
        <dt class="col-sm-3">Descrição</dt>
        <dd class="col-sm-9"><?php echo $desc_acao; ?></dd>

        <dt class="col-sm-3">Texto do botão</dt>
        <dd class="col-sm-9"><?php echo $text_btn_acao; ?></dd>

        <dt class="col-sm-3">Link do botão</dt>
        <dd class="col-sm-9"><?php echo $link_btn_acao; ?></dd>
    </dl>    

<?php
    }else{
        echo '<div class="alert alert-danger" role="alert">Erro: Ação do site não possui nenhum registro!</div>';
    }
?>
    <hr>
    <h2>Detalhes do Contato</h2>
    
    <?php
    if (!empty($this->dados['home']['contato'])) {
        extract($this->dados['home']['contato']);
    ?>
    <dl class="row">
        
        
        <dt class="col-sm-3">Título</dt>
        <dd class="col-sm-9"><?php echo $titulo_contato; ?></dd>

        <dt class="col-sm-3">Subtitulo</dt>
        <dd class="col-sm-9"><?php echo $subtitulo_contato; ?></dd>
        
        <dt class="col-sm-3">Endereço</dt>
        <dd class="col-sm-9"><?php echo $end_contato; ?></dd>
        
        <dt class="col-sm-3">Telefone</dt>
        <dd class="col-sm-9"><?php echo $tel_contato; ?></dd>
        
        <dt class="col-sm-3">E-mail</dt>
        <dd class="col-sm-9"><?php echo $email_contato; ?></dd>
        

    </dl>    

<?php
    }else{
        echo '<div class="alert alert-danger" role="alert">Erro: Contato do site não possui nenhum registro!</div>';
    }

?>
</div>