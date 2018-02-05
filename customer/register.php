<?php include '../views/viewheader.php'; ?>
<br/>
<div class="card">
    <div class="card-content">
        <div class="container">
        <form class="col s12" id="login_user_form" action="index.php" method="post">
          <input type="hidden" name="action" value="signUP"/>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input placeholder="User Name" id="userName" type="text" name="username" class="validate">
              <label for="userName">User Name</label>
            </div>
        
              <div class="input-field col s12 m6 l6">
              <input placeholder="Password" id="password" type="text" name="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input placeholder="First Name" id="fName" type="text" name="fName" class="validate">
              <label for="fName">First Name</label>
            </div>
        
              <div class="input-field col s12 m6 l6">
              <input placeholder="Last Name" id="lName" type="text" name="lName" class="validate">
              <label for="lName">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input placeholder="Email Address" id="emailAddress" type="text" name="emailAddress" class="validate">
              <label for="emailAddress">Email Address</label>
            </div>
        
              <div class="input-field col s12 m6 l6">
              <input placeholder="Phone Number" id="phoneNumber" type="text" name="phoneNumber" class="validate">
              <label for="phoneNumber">Phone Number</label>
            </div>
          </div>
          <div class="center-align">
          <button class="btn waves-effect" type="submit" name="signUP">Sign Up</button>
          </div>
        </form>
        </div>
    </div>
</div>
<h1 class="white-text"><?php echo $error; ?></h1>
<?php include '../views/viewfooter.php'; ?>