<?php include 'adminheader.php'; ?>
<br />
<div class="container">
<div class="card">
    <div class="card-content">
        <br />
        <div class="container">
          <?php foreach ($customerDetails as $Detail): ?>
              <?php echo $Detail['fName']; ?>
              <?php echo $Detail['lName']; ?>
              <?php echo $Detail['email']; ?>
              <?php echo $Detail['phoneNumber']; ?>
          <?php endforeach; ?>
        </div>
   </div>
</div>
</div>
<?php include 'adminfooter.php'; ?>