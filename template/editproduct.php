<?php include 'inc/header.php'; ?>
<div class="format" style="margin-top: 5rem;">
	<h2 class=" headerfont">Edit Product</h2>
	<form method="post" action="edit.php?id=<?php echo $product->product_id; ?>">
		<div class="form-group">
			<label>Product</label>
			<input type="text" class="form-control" name="product_name" value="<?php echo $product->product_name; ?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"><?php echo $product->description; ?></textarea>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" class="form-control" name="list_price" value="<?php echo $product->list_price; ?>">
		</div>
		<div class="form-group">
			<label>Year</label>
			<input type="number" class="form-control" name="model_year" value="<?php echo $product->model_year; ?>">
		</div>

		<input type="submit" class="btn btn-primary" value="Submit" name="submit">

	</form>
</div>
<?php include 'inc/footer.php'; ?>