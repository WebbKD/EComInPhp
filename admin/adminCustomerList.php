<?php include 'adminheader.php'; ?>
<br >
<br >
<h2 class="center-align white-text">Customer List</h2>
<div class="container">
  <table>
        <thead>
          <tr>
              <th class="white-text">First Name</th>
              <th class="white-text">Last Name</th>
              <th class="white-text">E-mail</th>
          </tr>
        </thead>
   
        <tbody>
            
            <?php foreach($customerList as $customerDetail ): ?>
          <tr>
            <td class="white-text"><?php echo $customerDetail['fName']; ?></td>
            <td class="white-text"><?php echo $customerDetail['lName']; ?></td>
            <td class="white-text"><?php echo $customerDetail['emailAddress']; ?></td>
            <td class="white-text"><a class="btn" href="?action=view_customerDetails&customerID=<?php echo $customerDetail['customerID'];?>" >View Customer</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
  </table>
  <br />
  <br />
</div>

<?php include 'adminfooter.php'; ?>