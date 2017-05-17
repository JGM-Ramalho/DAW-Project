<?php
/* Smarty version 3.1.30, created on 2016-11-27 23:35:03
  from "C:\wamp64\www\PFinal\tpl\showCart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583b6da72fe399_73710942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f978c5640524ebf2f5d4f3517b1f5decae143f08' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\showCart.tpl',
      1 => 1480289701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583b6da72fe399_73710942 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12">
  <div class="row">
    <div class="container cart">
      <div class="panel panel-info">
        <div class="panel-body cart">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="row">
          <div class="col-xs-2"><img class="img-responsive cart" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imgURL'];?>
">
          </div>
          <div class="col-xs-4 cart">
            <h3 class="product-name"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['NomeProduto'];?>
</strong></h3>
          </div>
          <div class="col-xs-6 cart">
            <div class="col-xs-6 text-right">
              <h4><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['PrecoVenda'];?>
 € <span class="text-muted">x</span></strong></h4>
            </div>
            <div class="col-xs-4 cart">
              <h4><?php echo $_smarty_tpl->tpl_vars['item']->value['Quantidade'];?>
</h4>
            </div>
            <div class="col-xs-2">
              <a type="button" class="btn btn-link btn-xs" href="deleteFromCart.php?pid=<?php echo $_smarty_tpl->tpl_vars['item']->value['ProdutoId'];?>
">
                <span class="glyphicon glyphicon-trash"> </span>
              </a>
            </div>
          </div>
        </div>
        <hr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


      <div class="panel-footer">
        <div class="row text-center">
          <div class="col-xs-9">
            <h4 class="text-right">Total <strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 €</strong></h4>
          </div>
          <div class="col-xs-3">
            <button type="button" class="btn btn-success btn-block">
              Checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php }
}
