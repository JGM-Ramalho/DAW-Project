<div class="col-xs-2 sidebar">
{include file="sidebar.tpl"}
</div>

<div class="col-xs-10 pBody">
  {foreach $p as $prod}
  <div class="col-md-3 column thumbnail">
    <img alt="{$prod.NomeProduto}" src="{$prod.imgURL}">
    <div class="caption">
      <h3>
        {$prod.NomeProduto}
      </h3>
      <p>
        <h4>{$prod.PrecoVenda}€</h4>
        <a class="btn btn-primary" href="addToCart.php?pid={$prod.ProdutoId}">Adicionar ao Carrinho de Compras</a>
      </p>
    </div>
  </div>
  {/foreach}
</div>
