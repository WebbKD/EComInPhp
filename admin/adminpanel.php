<?php include 'adminheader.php'; ?>
<!--Add products and view orders-->
<br />
<div class="container">
    <div class="row">
        <div class="col l6">
            <div class="card">
                <div class="card-image">
                    <img src="http://www.painc.com/wp-content/uploads/2014/01/Products-And-Services.jpg" />
                </div>    
                <div class="card-content">
                    Manage your products here
                </div>
            <div class="card-action">
                <a href="?action=view_products" class="btn">Products</a>
            </div>
            </div>
        </div>
        <div class="col l6">
            <div class="card">
                <div class="card-image">
                    <img src="http://www.harapartners.com/blog/wp-content/uploads/2015/03/order-processing.jpg">
                </div>    
                <div class="card-content">
                    View your customer order history here
                </div>
                <div class="card-action">
                <a href="?action=view_orders" class="btn">Products</a>
            </div>
            </div>
        </div>
    </div>
    <!--Adding admin mins and viewing customer list-->
    <div class="row">
        <div class="col l6">
            <div class="card">
                <div class="card-image">
                    <img src="http://www.thepixelfarm.co.uk/wp-content/uploads/2016/05/admin_v01D_support.png">
                </div>    
                <div class="card-content">
                    Manage your admins here
                </div>
            </div>
        </div>
        <div class="col l6">
            <div class="card">
                <div class="card-image">
                    <img src="https://www.nanorep.com/wp-content/uploads/2016/12/customer-retention-770x379.jpg">
                </div>    
                <div class="card-content">
                    View your customer list here
                </div>
                <div class="card-action">
                   <a href="?action=view_customer" class="btn">Customers</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'adminfooter.php'; ?>