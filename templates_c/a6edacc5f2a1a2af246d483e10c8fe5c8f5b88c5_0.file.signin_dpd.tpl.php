<?php
/* Smarty version 3.1.30, created on 2016-11-25 00:37:01
  from "C:\wamp64\www\PFinal\tpl\signin_dpd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583787adbc1a44_48519576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6edacc5f2a1a2af246d483e10c8fe5c8f5b88c5' => 
    array (
      0 => 'C:\\wamp64\\www\\PFinal\\tpl\\signin_dpd.tpl',
      1 => 1480033728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583787adbc1a44_48519576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in <b class="caret"></b></a>
  <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
    <li>
      <div class="row">
        <div class="col-md-12">
          <form class="form" role="form" method="post" action="login_action.php" accept-charset="UTF-8" id="login-nav">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block">Log in</button>
            </div>
          </form>
        </div>
      </div>
    </li>
  </ul>
</li>
<?php }
}
