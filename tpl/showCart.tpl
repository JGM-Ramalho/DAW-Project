<div class="col-xs-12">
  <div class="row">
    <div class="container cart">
      <div class="panel panel-info">
        <div class="panel-body cart">

        {foreach $cart as $item}
        <div class="row">
          <div class="col-xs-2"><img class="img-responsive cart" src="{$item.imgURL}">
          </div>
          <div class="col-xs-4 cart">
            <h3 class="product-name"><strong>{$item.NomeProduto}</strong></h3>
          </div>
          <div class="col-xs-6 cart">
            <div class="col-xs-6 text-right">
              <h4><strong>{$item.PrecoVenda} € <span class="text-muted">x</span></strong></h4>
            </div>
            <div class="col-xs-4 cart">
              <h4>{$item.Quantidade}</h4>
            </div>
            <div class="col-xs-2">
              <a type="button" class="btn btn-link btn-xs" href="deleteFromCart.php?pid={$item.ProdutoId}">
                <span class="glyphicon glyphicon-trash"> </span>
              </a>
            </div>
          </div>
        </div>
        <hr>
        {/foreach}

      <div class="panel-footer">
        <div class="row text-center">
          <div class="col-xs-9">
            <h4 class="text-right">Total <strong>{$total} €</strong></h4>
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
