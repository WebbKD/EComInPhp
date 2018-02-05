<?php include 'adminheader.php'; ?>
<br />
<div class="container">
<div class="card black">
    <div class="card-content">
        <div class="row">
            <div class="col s12 m6 l6">
               <h3 class="white-text"> <?php echo $fName; ?> </h3>
            </div>
            <div class="col s12 m6 l6">
               <h3 class="white-text"> <?php echo $lName; ?> </h3>
            </div>
        </div>
        <br />
        <div class="container">
          <table>
                <thead>
                  <tr>
                      <th class="white-text">Product Name</th>
                      <th class="white-text">Qty</th>
                      <th class="white-text">Price</th>
                  </tr>
                </thead>
           
                <tbody>
                    
                    <?php foreach($thisOrder as $thisDetail ): ?>
                  <tr>
                    <td class="white-text"><?php echo $thisDetail['productName']; ?></td>
                    <td class="white-text"><?php echo $thisDetail['qty']; ?></td>
                    <td class="white-text"><?php echo $thisDetail['price']; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
          </table>
        </div>
   </div>
</div>
</div>
<?php include 'adminfooter.php'; ?>