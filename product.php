<?php include_once 'config/init.php'; ?>

<?php
$product = new Products;


if (isset($_POST['delproduct'])) {

  $del = $_POST['delproduct'];

  if ($product->delete($del)) {
    redirect('index.php', 'Product Deleted', 'success');
  } else {
    redirect('index.php', 'Product Not Deleted', 'error');
  }
}

$template = new Template('template/viewproduct.php');

$product_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->product = $product->getProduct($product_id);

echo $template;
