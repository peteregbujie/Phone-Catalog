<?php include_once 'config/init.php'; ?>

<?php
$product = new Products;

if (isset($_POST['submit'])) {

    $data = array();
    $data['product_name'] = $_POST['product_name'];
    $data['brand_id'] = $_POST['brand'];
    $data['description'] = $_POST['description'];
    $data['model_year'] = $_POST['model_year'];
    $data['list_price'] = $_POST['list_price'];

    if ($product->create($data)) {
        redirect('index.php', 'New Product Added', 'success');
    } else {
        redirect('index.php', 'New Product not Added', 'error');
    }
}



$template = new Template('template/createproduct.php');

$template->brands = $product->getBrands();

echo $template;
