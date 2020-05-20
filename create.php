<?php include_once 'config/init.php'; ?>

<?php
$product = new Products;

if (isset($_POST['submit'])) {

    $data = array();
    $data['product_name'] = htmlspecialchars($_POST['product_name']);
    $data['brand_id'] = htmlspecialchars($_POST['brand']);
    $data['description'] = htmlspecialchars($_POST['description']);
    $data['model_year'] = htmlspecialchars($_POST['model_year']);
    $data['list_price'] = htmlspecialchars($_POST['list_price']);

    if ($product->create($data)) {
        redirect('index.php', 'New Product Added', 'success');
    } else {
        redirect('index.php', 'New Product not Added', 'error');
    }
}



$template = new Template('template/createproduct.php');

$template->brands = $product->getBrands();

echo $template;
