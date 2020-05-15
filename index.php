<?php include_once 'config/init.php'; ?>

<?php

$product = new Products;

$template = new Template('template/homepage.php');

$brand = isset($_GET['brand']) ? $_GET['brand'] : null;

if ($brand) {
    $template->products = $product->getProductsByBrand($brand);
    $template->title = $product->getBrand($brand)->brand_name . ' ' . 'Products in Stock';
} else {
    $template->products = $product->getAllProducts();
    $template->title = 'Products in Stock';
}

$template->brands = $product->getBrands();

echo $template;
