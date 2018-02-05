<?php include 'adminheader.php'; ?>
<br >
<br >
<h2 class="center-align white-text">Your products</h2>
<div class="container">
  <table>
        <thead>
          <tr>
              <th class="white-text">Name</th>
              <th class="white-text">Description</th>
              <th class="white-text">Item Price</th>
              <th class="white-text">Image</th>
          </tr>
        </thead>
   
        <tbody>
            
            <?php foreach($productList as $product ): ?>
          <tr>
            <td class="white-text"><?php echo $product['productName']; ?></td>
            <td class="white-text"><?php echo $product['description']; ?></td>
            <td class="white-text"><?php echo $product['price']; ?></td>
            <td class="white-text"><?php echo $product['productImage']?></td>
            <td class="white-text"><a class="btn" href="?action=edit_product&productID=<?php echo $product['productID'];?>" >Edit</a></td>
            <td class="white-text">
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_product" />
                    <input type="hidden" name="productID" value="<?php echo $product['productID'] ?>" />
                    <button class="btn waves-effect" type="submit" name="Delete Item"> Delete </button>
                </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
  </table>
  <br />
  <br />
  <div class="row">
      <a href="?action=add_Product" class="btn">Add Product</a>
  </div>
</div>

<?php include 'adminfooter.php'; ?>