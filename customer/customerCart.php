<?php include 'customerHeader.php' ?>

 <h3 class="center">Cart</h3>
 <div class="card">
    <table class="responsive-table centered">
      <thead>
        <tr>
            <th>Item Name <!--Should Just be an incremental number for however many items are in the cart--> </th>
            <th>Item of Item</th>
            <th>Item Price <!--data bind product name instead of showing product id--></th>
            <th>Item Quantity</th>
            <th>Remove this Item?</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cart_Items as $Item): ?>
        <tr>
            <td><?php echo $Item['productName']; ?></td>
            <td class="center"><img class="responsive-img center-align" id="cartImg" data-caption="Name of the Product Goes Here" width="100" src="../images/<?php echo $Item['productImage'];?>"></td>
            <td><?php echo $Item['price']; ?></td>
            <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">remove</i></a> 1 <a class="waves-effect waves-teal btn-flat"><i class="material-icons">add</i></a></td>
            <td>
              <form action="." method="post">  
                <input type="hidden" name="action" value="delete_cart_item" />
                <input type="hidden" name="cartID" value="<?php echo $Item['cartID']; ?>" />
                <button class="btn waves-effect" type="submit" name="Delete Item">Remove</button>
              </form>
            </td>
        </tr>
        <?php $totalPrice = $totalPrice + floatval($Item['price']); ?>
        <?php endforeach;?>
      </tbody>
    </table>
    <h2>This is your current total $<?php echo $totalPrice; ?></h2>
    
    <form action="index.php" method="POST">
        <input type="hidden" name="action" value="checkoutOrder">
        <!--Need to all the items into order details at once. Array?-->
        <?php foreach($cart as $Item): ?>
          <input type="hidden" name="productID[]" value="<?php echo $Item['productID']; ?>" />
          <input type="hidden" name="qty[]" value="<?php echo $Item['quantity']; ?>" />
        <?php endforeach; ?>
        <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>" />
        
        
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount="<?php echo $totalPrice * 100; ?>"
          data-name="The Network"
          data-description="Your Order Total"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-locale="auto"
          data-zip-code="true">
        </script>
    </form>
</div>
<?php include 'customerFooter.php' ?>