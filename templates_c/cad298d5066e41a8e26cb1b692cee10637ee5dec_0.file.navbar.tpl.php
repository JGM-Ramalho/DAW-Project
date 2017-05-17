<?php
/* Smarty version 3.1.30, created on 2016-11-25 00:25:29
  from "C:\wamp64\www\PFinal\tpl\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583784f9993de7_07794752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cad298d5066e41a8e26cb1b692cee10637ee5dec' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\navbar.tpl',
      1 => 1480033527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dpdown.tpl' => 2,
    'file:logged.tpl' => 1,
    'file:signin_dpd.tpl' => 1,
  ),
),false)) {
function content_583784f9993de7_07794752 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12">
  <nav class="navbar navbar-default" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
      <a class="navbar-brand" href="index.php">TheWattageCottage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- Dropdown -->
        <?php $_smarty_tpl->_assignInScope('inst', 1 ,false ,32);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:dpdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bar'=>$_smarty_tpl->tpl_vars['inst']->value), 0, false);
?>

        <!-- Dropdown -->
        <?php $_smarty_tpl->_assignInScope('inst', 2 ,false ,32);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:dpdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bar'=>$_smarty_tpl->tpl_vars['inst']->value), 0, true);
?>

        <li><a href="">About Us</a>
        </li>
      </ul>
      <?php if ($_smarty_tpl->tpl_vars['sess']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:logged.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php } else { ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?loc=register">Register</a></li>
        <!-- Sign in -->
        <?php $_smarty_tpl->_subTemplateRender("file:signin_dpd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Sign in -->
      </ul>
      <?php }?>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
  <h2 class="error-msg index">
    <?php echo $_smarty_tpl->tpl_vars['message2']->value;?>

  </h2>
</div>
<?php }
}
