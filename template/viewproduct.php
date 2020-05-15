<?php include 'inc/header.php'; ?>
<div class="mycard" style="margin-top: 5rem;">
  <img class=" card-img-top" src="smartphone.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product->product_name; ?></h5>
    <p class="card-text"><?php echo $product->description; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <h4>Price</h4>$<?php echo $product->list_price; ?>
    </li>
    <li class="list-group-item">
      <h4>Year</h4><?php echo $product->model_year; ?>
    </li>
  </ul>
  <div class="card-body">
    <a href="edit.php?id=<?php echo $product->product_id; ?>" class="card-link">Edit Product</a>
    <form style="display:inline;" method="post" action="product.php">
      <input type="hidden" name="delproduct" value="<?php echo $product->product_id; ?>">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  </div>
  <br><br>
  <a href="index.php">Go Back</a>
  <br><br>
</div>
<?php include 'inc/footer.php'; ?>