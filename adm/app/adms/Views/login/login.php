<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
//Criptografar a senha
//echo password_hash(123456, PASSWORD_DEFAULT);

if (isset($this->dados['form'])) {
   $valorForm = $this->dados['form'];
}
?>

<form method="POST" action="" class="form-signin">
    <img class="mb-4" src="<?php echo URLADM; ?>app/adms/assets/imagens/login/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Área restrita</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
 //   var_dump($this->dados);
    ?>

    <label for="usuario" class="sr-only">Usuário</label>
    <input name="usuario" type="text" id="usuario" class="form-control mb-4" placeholder="Digite o usuário" value="<?php
    if (isset($valorForm['usuario'])) {
        echo $valorForm['usuario'];
    }
    ?>" required autofocus>

    <label for="senha" class="sr-only">Senha</label>
    <input name="senha" type="password" id="senha" class="form-control" placeholder="Digite a senha" required>

    <input name="SendLogin" type="submit" value="Acessar" class="btn btn-lg btn-primary btn-block">

    <p><a href="#">Cadastrar</a> - <a href="#">Esqueceu a senha?</a></p>
</form>