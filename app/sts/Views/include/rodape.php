<?php
    if(!defined('R4F5CC')){
       header("Location: /");
       die("Erro: Página não encontrada!");
    }
?>

<div class="jumbotron rodape">
    <div class="container">
        <div class="row">
         <div class="col-12 col-sm-12 col-md-4">
            <h5><?php echo $this->dados['rodape']['titulo_pg'];?></h5>
            <ul class="list-unstyled">
                <li><a href="#" class="link-rodape">Home</a></li>
                <li><a href="#" class="link-rodape">Serviços</a></li>
                <li><a href="#" class="link-rodape">Descrição</a></li>
                <li><a href="#" class="link-rodape">Contato</a></li>
            </ul>
         </div>
         <div class="col-12 col-sm-12 col-md-4">
             <h5><?php echo $this->dados['rodape']['titulo_contato'];?></h5>
             <ul class="list-unstyled">
                 <li><a href="<?php echo $this->dados['rodape']['link_telefone'];?>" class="link-rodape"><?php echo $this->dados['rodape']['txt_telefone'];?></a></li>
                 <li><a href="<?php echo $this->dados['rodape']['link_end'];?>" class="link-rodape"><?php echo $this->dados['rodape']['txt_end'];?></a></li>
                 <li><a href="<?php echo $this->dados['rodape']['link_cnpj'];?>" class="link-rodape">CNPJ.: 00.000.000/1000-00</a></li>
             </ul>
         </div>
         <div class="col-12 col-sm-12 col-md-4">
             <h5><?php echo $this->dados['rodape']['titulo_rede_soc'];?></h5>
             <ul class="list-unstyled">
                 <li><a href="<?php echo $this->dados['rodape']['link_um_rede_soc'];?>" target="_blank" class="link-rodape"><?php echo $this->dados['rodape']['txt_um_rede_soc'];?></a></li>
                 <li><a href="<?php echo $this->dados['rodape']['link_dois_rede_soc'];?>" target="_blank" class="link-rodape"><?php echo $this->dados['rodape']['txt_dois_rede_soc'];?></a></li>
                 <li><a href="<?php echo $this->dados['rodape']['link_tres_rede_soc'];?>" target="_blank" class="link-rodape"><?php echo $this->dados['rodape']['txt_tres_rede_soc'];?></a></li>
                 <li><a href="<?php echo $this->dados['rodape']['link_quatro_rede_soc'];?>" target="_blank" class="link-rodape"><?php echo $this->dados['rodape']['txt_quatro_rede_soc'];?></a></li>
             </ul>
         </div>
        </div>
    </div>
</div>
