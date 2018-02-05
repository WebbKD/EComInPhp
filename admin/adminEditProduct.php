<?php include 'adminheader.php'; ?>
<br />
<br />
<div class="container">
<div class="row">
    
    <form action="." method="post" enctype='multipart/form-data' class="col s12">
        <input type="hidden" name="action" value="edit_the_product" />
    <?php foreach($products as $product): ?>
     <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate" name="productname" value="<?php echo $product['productName']; ?>">
          <label for="name">Name</label>
        </div>
        
        <div class="input-field col s6">
          <input id="price" type="text" class="validate" name="price" value="<?php echo $product['price']; ?>">
          <label for="price">Price</label>
        </div>
      </div>
      
      <!--input field-->
      <div class="row">
          <label>Please Reupload the image or upload new image:</label>
          <input name='filename' type='file' />
      </div>
      
      <!--Full Text-->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="description" class="materialize-textarea"><?php echo $product['description']; ?></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
      <?php endforeach; ?>
       <input type="submit" name="Submit" class="btn">
    </form>
  </div>
  </div>

<?php include 'adminfooter.php'; ?>