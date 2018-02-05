<?php include '../views/viewheader.php'; ?>
<div class="container">
    <div class="row">
        <?php foreach($products as $product): ?>
        <div class="col s12 m6 l3">
            <div class="card black">
                <div class="card-image">
                     <img src="../images/<?php echo $product['productImage']?>">
                    <span class="card-title"><?php echo $product['productName']; ?></span>
                </div>
                <div class="card-content white-text">
                    <?php echo $product['description']; ?>
                    <br >
                    <?php echo $product['price']; ?>
                </div>
                <div class="card-action">
                    <div class="row">
                      <button class="btn col s12 m6 l6" href="#">Add to Cart</button>
                  </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div> 
</div>
<?php include '../views/viewfooter.php'; ?>