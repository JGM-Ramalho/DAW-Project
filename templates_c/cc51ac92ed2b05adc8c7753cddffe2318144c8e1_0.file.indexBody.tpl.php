<?php
/* Smarty version 3.1.30, created on 2016-11-25 00:27:27
  from "C:\wamp64\www\PFinal\tpl\indexBody.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5837856f2c5338_70354712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc51ac92ed2b05adc8c7753cddffe2318144c8e1' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\indexBody.tpl',
      1 => 1480033482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5837856f2c5338_70354712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12">
  <div class="container index">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
        </li>
        <li data-target="#carousel-example-generic" data-slide-to="1">
        </li>
        <li data-target="#carousel-example-generic" data-slide-to="2">
        </li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item c active">
          <img src="<?php echo $_smarty_tpl->tpl_vars['randImg']->value[0];?>
" alt="">
        </div>
        <div class="item c">
          <img src="<?php echo $_smarty_tpl->tpl_vars['randImg']->value[1];?>
" alt="">
        </div>
        <div class="item c">
          <img src="<?php echo $_smarty_tpl->tpl_vars['randImg']->value[2];?>
" alt="">

        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="col-xs-12">
      <h3 class="index-text strokeme">
        A TheWattageCottage orgulha-se de apresentar a sua loja online, para satisfazer todas as suas necessidades musicais <br><small>Temos uma escolha de Instrumentos de Cordas e de Percussão que o deixará surpreendido</small>
      </h3>
    </div>
  </div>
</div>
<?php }
}
