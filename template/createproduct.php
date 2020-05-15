<?php include 'inc/header.php'; ?>
<div class="format" style="padding-top:  5rem;">
	<h2 class=" headerfont">Create Product</h2>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>Product Name</label>
			<input type="text" class="form-control" name="product_name">
		</div>
		<div class="form-group">
			<label>Brand</label>
			<select class="form-control" name="brand">
				<option value="0">Select A Brand</option>
				<?php foreach ($brands as $brand) { ?>
					<option value="<?php echo $brand->brand_id; ?>"><?php echo $brand->brand_name; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="form-group">
			<label>Model Year</label>
			<input type="number" class="form-control" name="model_year">
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" class="form-control" name="list_price">
		</div>
		<input type="submit" class="btn btn-primary" value="Submit" name="submit">
	</form>
</div>
<?php include 'inc/footer.php'; ?>