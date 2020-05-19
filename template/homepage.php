<?php include 'inc/header.php'; ?>
<div class="jumbotron">
    <h1>Select An Item</h1>
    <form method="GET" , action="index.php">
        <select class=" form-control d-flex" name="brand">
            <option value="0">Select A Brand</option>
            <?php foreach ($brands as $brand) { ?>
                <option value="<?php echo $brand->brand_id; ?>"><?php echo $brand->brand_name; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" class="btn btn-lg btn-success" style="width:right;" value="SELECT">
    </form>
</div>

<h2 style="padding-left: 3rem;"><?php echo $title; ?></h2>
<div class="d-flex col-sm-4 col-md-4" style="margin: 2em;">
    <?php foreach ($products as $product) { ?>
        <div class=" card mycard">

            <img class="card-img-top" src="smartphone.png" alt="Card image cap">
            <div class=" card-body">
                <h5 class="card-title"><?php echo $product->product_name; ?></h5>
                <p class="card-text" style="text-align: justify;"><?php echo $product->description; ?></p>
                <a href="product.php?id=<?php echo $product->product_id; ?>" class="btn btn-primary">View</a>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'inc/footer.php'; ?>