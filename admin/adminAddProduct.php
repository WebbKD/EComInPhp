<?php include 'adminheader.php'; ?>

<div class="row">
    
    <form action="." method="post" enctype='multipart/form-data' class="col s12">
        <input type="hidden" name="action" value="add_the_product" />
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate" name="productname">
          <label for="name">Name</label>
        </div>
        
        <div class="input-field col s6">
          <input id="price" type="text" class="validate" name="price">
          <label for="price">Price</label>
        </div>
      </div>
      
      <!--input field-->
      <div class="row">
          <label>Upload an Image:</label>
          <input name='filename' type='file' />
      </div>
      
      <!--Full Text-->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
       <input type="submit" name="Submit" class="btn">
    </form>
  </div>

<?php include 'adminfooter.php'; ?>