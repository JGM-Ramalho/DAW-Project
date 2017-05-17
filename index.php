<?php
include('libs/Smarty.class.php');
include('db/db.php');

$smarty = new Smarty;
$smarty->setTemplateDir('tpl');

$produtosD = array(
  'Baterias Acústicas' => array( 'Kit Completo' =>'index.php?loc=produtos&cat=KC',
  'Toms'=>'index.php?loc=produtos&cat=T',
  'Tarolas'=>'index.php?loc=produtos&cat=TA',
  'Pratos'=>'index.php?loc=produtos&cat=CY',
  'Bumbos'=>'index.php?loc=produtos&cat=BU'),

  'Baterias Eletrónicas' => array('Kit Completo'=>'index.php?loc=produtos&cat=EKC',
  'Pads'=>'index.php?loc=produtos&cat=P',
  'Pratos'=>'index.php?loc=produtos&cat=CYP'),

  'Hardware' => array('Racks'=>'index.php?loc=produtos&cat=R',
  'Suportes para pratos'=>'index.php?loc=produtos&cat=CST'),

  'Acessórios' => array( 'Cabos'=>'index.php?loc=produtos&cat=C',
  'Bancos'=>'index.php?loc=produtos&cat=BA',
  'Malas de transporte'=>'index.php?loc=produtos&cat=DCS',
  'Baquetas'=>'index.php?loc=produtos&cat=DST',
  'Peças'=>'index.php?loc=produtos&cat=PRT')
);

$produtosG = array('Guitarras Elétricas' => array(
  'Tipo ST'=>'index.php?loc=produtos&cat=STT',
  'Tipo LP'=>'index.php?loc=produtos&cat=LPT',
  'Tipo SG'=>'index.php?loc=produtos&cat=SGT',
  'Tipo T'=>'index.php?loc=produtos&cat=TT',
  'Hollowbody'=>'index.php?loc=produtos&cat=HB'),

  'Guitarras Acústicas' => array('Clássicas'=>'index.php?loc=produtos&cat=CL',
  'Aço'=>'index.php?loc=produtos&cat=ST'),

  'Amplificadores' => array('Amp. Válvulas'=>'index.php?loc=produtos&cat=VAMP',
  'Amp. Solid State'=>'index.php?loc=produtos&cat=SSAMP'),

  'Pedais' => array('Distorção'=>'index.php?loc=produtos&cat=DS',
  'Modulação'=>'index.php?loc=produtos&cat=MOD'),

  'Acessórios' => array( 'Cabos'=>'index.php?loc=produtos&cat=CBL',
  'Fitas'=>'index.php?loc=produtos&cat=STRP',
  'Cordas'=>'index.php?loc=produtos&cat=STRGS',
  'Suportes'=>'index.php?loc=produtos&cat=GSTDS',
  'Peças'=>'index.php?loc=produtos&cat=GPRTS')
);

$smarty -> assign('produtosG',$produtosG);
$smarty -> assign('produtosD',$produtosD);

$imagesDir = 'img/carousel/';

$images = glob($imagesDir . '*.jpg', GLOB_BRACE);

$randomImage =array($images[array_rand($images)], $images[array_rand($images)], $images[array_rand($images)]);

$smarty->assign('randImg',$randomImage);

$smarty->assign('categorias',
array(
  "1" => "Guitarras",
  "2" => "Baterias"
)
);

if (isset($_GET['cat']))
{
  $cat=$_GET['cat'];
  switch ($cat)
  {
    case'KC':
    case'T':
    case'TA':
    case'CY':
    case'BU':
    case'EKC':
    case'P':
    case'CYP':
    case'R':
    case'CST':
    case'C':
    case'BA':
    case'DCS':
    case'DST':
    case'PRT':
    $smarty-> assign('instCat', 'D');
    $query = "SELECT * FROM `produto` WHERE `Tipo` ='".$cat."';";
    if(!$mysqli->query($query))
    printf("Error: %s\n", $mysqli->error);
    $result = $mysqli->query($query);
    $p = array();
    while ($row = mysqli_fetch_array($result)) {
      $p[] = $row;
    }
    $smarty -> assign('p',$p);
    break;

    default:
    $smarty-> assign('instCat', 'G');
    $query = "SELECT * FROM `produto` WHERE `Tipo` ='".$cat."';";
    if(!$mysqli->query($query))
    printf("Error: %s\n", $mysqli->error);
    $result = $mysqli->query($query);
    $p = array();
    while ($row = mysqli_fetch_array($result)) {
      $p[] = $row;
    }
    //var_dump($p);
    $smarty -> assign('p',$p);
    break;
  }
}

$name = "";
$email = "";
$message= "";
$message2= "";

if (isset($_GET['message'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];
}

if (isset($_GET['message2'])) {
  $message2 = $_GET['message2'];
}
session_start();
if(isset($_SESSION['login']))
{
  $smarty->assign('sess',true);
  $smarty->assign('username',$_SESSION['login']['name']);

  if (isset($_SESSION['login']['admin'])) {
    $smarty->assign('admin',true);
  }
  else {
    $smarty->assign('admin',false);
  }

}
else {
  $smarty->assign('sess',false);
  $smarty->assign('username','');
}


if (isset($_GET['loc'])) {

  $loc=$_GET['loc'];
  switch ($loc) {
    case 'produtos':
    $smarty-> assign('htmlBody', 'tpl/productBody.tpl');
    break;
    case 'register':
    $smarty-> assign('htmlBody', 'tpl/registerBody.tpl');
    break;
    case 'home':
    $smarty-> assign('htmlBody', 'tpl/indexBody.tpl');
    break;

    case 'cart':
    $query2 = "SELECT carrinho.ProdutoId,carrinho.Quantidade,produto.NomeProduto,produto.imgURL,produto.PrecoVenda FROM carrinho INNER JOIN produto
    ON carrinho.ProdutoId = produto.ProdutoId AND carrinho.ClienteId='".$_SESSION['login']['ClienteId']."';";

    if(!$mysqli->query($query2))
    printf("Error: %s\n", $mysqli->error);

    $result = $mysqli->query($query2);
    //var_dump($mysqli->query($query2));
    //var_dump(mysqli_fetch_array($result));

    $cart = array();
    $total=0;
    while ($row = mysqli_fetch_array($result))
    {
      $cart[] = array(
        "ProdutoId" => $row['ProdutoId'],
        "Quantidade" => $row['Quantidade'],
        "NomeProduto" => $row['NomeProduto'],
        "imgURL" => $row['imgURL'],
        "PrecoVenda" => $row['PrecoVenda']
      );
      $total+=$row['PrecoVenda']*$row['Quantidade'];
    }
    //var_dump($cart);

    if (!isset($cart)) {
      $cart = array();
      $smarty->assign('cart',$cart);
      $smarty->assign('htmlBody', 'tpl/showCart.tpl');
      $smarty->assign('total',$total);

    }
    else {
      $smarty-> assign('cart', $cart);
      $smarty-> assign('htmlBody', 'tpl/showCart.tpl');
      $smarty->assign('total',$total);
    }
    break;
    case 'backoffice':
    $smarty-> assign('htmlBody', 'tpl/backoffice.tpl');
    break;
  }
}
else {
  $smarty-> assign('htmlBody', 'tpl/indexBody.tpl');
  header('location: index.php?loc=home');
}



$smarty->assign('message',$message);
$smarty->assign('message2',$message2);
$smarty->assign('name',$name);
$smarty->assign('email',$email);

$smarty->display('tpl/index.tpl');

?>
