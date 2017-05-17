<?php
/* Smarty version 3.1.30, created on 2016-11-23 22:50:31
  from "C:\wamp64\www\PFinal\tpl\sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58361d377470b2_15548818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4346010f8f89d56c5903b22fe24a3670b0a2a1d3' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\sidebar.tpl',
      1 => 1479941407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58361d377470b2_15548818 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header sidebar">
  <button type="button" class="navbar-toggle sidebar" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="glyphicon glyphicon-menu-hamburger"></span>
  </button>
</div>
<?php if ($_smarty_tpl->tpl_vars['instCat']->value == 'D') {
$_smarty_tpl->_assignInScope('produtos', $_smarty_tpl->tpl_vars['produtosD']->value);
} elseif ($_smarty_tpl->tpl_vars['instCat']->value == 'G') {
$_smarty_tpl->_assignInScope('produtos', $_smarty_tpl->tpl_vars['produtosG']->value);
}?>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse sidebar" id="bs-example-navbar-collapse">

  <div class="panel panel-default">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtos']->value, 'produto');
$_smarty_tpl->tpl_vars['produto']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->index++;
$__foreach_produto_0_saved = $_smarty_tpl->tpl_vars['produto'];
?>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['produto']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['produto']->key;?>
</a>
      </h4>
    </div>
    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['produto']->index;?>
" class="panel-collapse collapse in">
      <div class="panel-body">
        <table class="table sidebar">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produto']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
          <tr>
            <td>
              <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->key;?>
</a>
            </td>
          </tr>
          <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['produto'] = $__foreach_produto_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
</div>
</div>
<?php }
}
