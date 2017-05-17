<li class="dropdown dropdown-large">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$categorias.$inst}
    <span class="caret"></span></a>
    {if $inst==2}
    {$produtos=$produtosD}
    {else}
    {$produtos=$produtosG}
    {/if}
    <ul class="dropdown-menu dropdown-menu-large row">

      {foreach $produtos as $produto}

      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">{$produto@key}</li>
          {foreach $produto as $item}

          <li><a href="{$item}">{$item@key}</a></li>
          {/foreach}
        </ul>
      </li>
      {/foreach}
    </ul>
  </li>
