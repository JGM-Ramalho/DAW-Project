<?php
/* Smarty version 3.1.30, created on 2016-11-28 15:19:57
  from "C:\wamp64\www\PFinal\tpl\logged.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583c4b1d642019_42632503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5682475a63d9a272f3dee5533ba57be0b1a69452' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\logged.tpl',
      1 => 1480346396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583c4b1d642019_42632503 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a href="index.php?loc=cart"role="button"> <span class="glyphicon glyphicon-shopping-cart">
    </span> Carrinho</a>
  </li>

<li class="dropdown logout"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
  Welcome, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<b class="caret"></b></a>
  <ul class="dropdown-menu logout">
    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
    <li><a href="index.php?loc=backoffice"><i class="glyphicon glyphicon-wrench"></i> Backoffice</a></li>
  </ul>
</li>
</ul>
<?php }
}
