<?php
/* Smarty version 3.1.30, created on 2016-11-25 00:18:50
  from "C:\wamp64\www\PFinal\tpl\productBody.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5837836a17b933_17724035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ccbf3974f4375f4769e548f1f1631a1bd58c41' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\productBody.tpl',
      1 => 1480033128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_5837836a17b933_17724035 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-2 sidebar">
<?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<div class="col-xs-10 pBody">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
  <div class="col-md-3 column thumbnail">
    <img alt="<?php echo $_smarty_tpl->tpl_vars['prod']->value['NomeProduto'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['prod']->value['imgURL'];?>
">
    <div class="caption">
      <h3>
        <?php echo $_smarty_tpl->tpl_vars['prod']->value['NomeProduto'];?>

      </h3>
      <p>
        <h4><?php echo $_smarty_tpl->tpl_vars['prod']->value['PrecoVenda'];?>
€</h4>
        <a class="btn btn-primary" href="addToCart.php?pid=<?php echo $_smarty_tpl->tpl_vars['prod']->value['ProdutoId'];?>
">Adicionar ao Carrinho de Compras</a>
      </p>
    </div>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
