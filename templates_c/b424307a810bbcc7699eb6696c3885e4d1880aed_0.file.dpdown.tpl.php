<?php
/* Smarty version 3.1.30, created on 2016-11-23 20:33:17
  from "C:\wamp64\www\PFinal\tpl\dpdown.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835fd0ded78c7_47713995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b424307a810bbcc7699eb6696c3885e4d1880aed' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\dpdown.tpl',
      1 => 1479933196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835fd0ded78c7_47713995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="dropdown dropdown-large">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['categorias']->value[$_smarty_tpl->tpl_vars['inst']->value];?>

    <span class="caret"></span></a>
    <?php if ($_smarty_tpl->tpl_vars['inst']->value == 2) {?>
    <?php $_smarty_tpl->_assignInScope('produtos', $_smarty_tpl->tpl_vars['produtosD']->value);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('produtos', $_smarty_tpl->tpl_vars['produtosG']->value);
?>
    <?php }?>
    <ul class="dropdown-menu dropdown-menu-large row">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtos']->value, 'produto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$__foreach_produto_0_saved = $_smarty_tpl->tpl_vars['produto'];
?>

      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header"><?php echo $_smarty_tpl->tpl_vars['produto']->key;?>
</li>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produto']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>

          <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->key;?>
</a></li>
          <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
      </li>
      <?php
$_smarty_tpl->tpl_vars['produto'] = $__foreach_produto_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
  </li>
<?php }
}
