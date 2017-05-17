<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header sidebar">
  <button type="button" class="navbar-toggle sidebar" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="glyphicon glyphicon-menu-hamburger"></span>
  </button>
</div>
{if $instCat=='D'}
{$produtos=$produtosD}
{elseif $instCat=='G'}
{$produtos=$produtosG}
{/if}
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse sidebar" id="bs-example-navbar-collapse">

  <div class="panel panel-default">

    {foreach $produtos as $produto}
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$produto@index}">{$produto@key}</a>
      </h4>
    </div>
    <div id="collapse{$produto@index}" class="panel-collapse collapse in">
      <div class="panel-body">
        <table class="table sidebar">
          {foreach $produto as $item}
          <tr>
            <td>
              <a href="{$item}">{$item@key}</a>
            </td>
          </tr>
          {/foreach}
        </table>
      </div>
    </div>
    {/foreach}
  </ul>
</div>
</div>
