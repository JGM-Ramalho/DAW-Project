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
        {assign var="inst" value=1 scope=global}
        {include file="dpdown.tpl" bar=$inst}
        <!-- Dropdown -->
        {assign var="inst" value=2 scope=global}
        {include file="dpdown.tpl" bar=$inst}
        <li><a href="">About Us</a>
        </li>
      </ul>
      {if $sess}
      {include file="logged.tpl"}
      {else}
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?loc=register">Register</a></li>
        <!-- Sign in -->
        {include file="signin_dpd.tpl"}
        <!-- Sign in -->
      </ul>
      {/if}
    </div>
    <!-- /.navbar-collapse -->
  </nav>
  <h2 class="error-msg index">
    {$message2}
  </h2>
</div>
