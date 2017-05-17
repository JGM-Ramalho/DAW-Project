<?php
/* Smarty version 3.1.30, created on 2016-11-23 17:33:32
  from "C:\wamp64\www\PFinal\tpl\registerBody.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835d2ec682ce4_73930733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd496548658749d598df588b5f48e926282badc71' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\registerBody.tpl',
      1 => 1479922410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835d2ec682ce4_73930733 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12">
  <div class="container reg">

    <h2 class="error-msg">
      <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </h2>

    <h2 class="reg-h">Formulário de Registo</h2>

    <form class="signin reg" method="post" action="register_action.php">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="name" id="inputName" name="name" class="form-control" placeholder="Coloque o seu nome" value ="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Coloque o seu email" value ="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"  required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Insira a sua Password" required="">
        <input type="password" id="passwordR" name="passwordR" class="form-control rp" placeholder="Confirme a Password" required="">
      </div>
      <div class="btn-group btn-group-justified">
        <button href="" class="btn btn-primary" type="button" VALUE="Back" onClick="history.go(-1);return true;">Voltar</button>
        <button class="btn btn-primary" type="submit">Finalizar Registo</button>
      </div>
    </form>
  </div>
</div>
<?php }
}
