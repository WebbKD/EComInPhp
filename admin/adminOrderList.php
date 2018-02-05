<?php include 'adminheader.php'; ?>
<br >
<br >
<h2 class="center-align white-text">The Orders</h2>
<div class="container">
  <table>
        <thead>
          <tr>
              <th class="white-text">First Name</th>
              <th class="white-text">Last Name</th>
              <th class="white-text">Phone Number</th>
              <th class="white-text">Price Of the Order</th>
              <th class="white-text">Date Order Was Made</th>
          </tr>
        </thead>
   
        <tbody>
            
            <?php foreach($ordersList as $order ): ?>
          <tr>
            <td class="white-text"><?php echo $order['fName']; ?></td>
            <td class="white-text"><?php echo $order['lName']; ?></td>
            <td class="white-text"><?php echo $order['phoneNumber']; ?></td>
            <td class="white-text">$<?php echo $order['priceOfOrder']?></td>
            <td class="white-text"><?php echo $order['dateOrderWasMade']?></td>
            <td class="white-text"><a class="btn" href="?action=view_order&orderID=<?php echo $order['orderID'];?>&fName=<?php echo $order['fName'];?>&lName=<?php echo $order['lName'];?>" >View Order</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
  </table>
  <br />
  <br />
</div>

<?php include 'adminfooter.php'; ?>