<?php include_once 'config/init.php'; ?>

<?php
$product = new Products;

$product_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['submit'])) {
    $data = array();
    $data['product_name'] = $_POST['product_name'];
    $data['description'] = $_POST['description'];
    $data['model_year'] = $_POST['model_year'];
    $data['list_price'] = $_POST['list_price'];

    if ($product->update($product_id, $data)) {
        redirect('index.php', 'Product updated', 'success');
    } else {
        redirect('index.php', 'Product not updated', 'error');
    }
}

$template = new Template('template/editproduct.php');

$template->product = $product->getProduct($product_id);

echo $template;
