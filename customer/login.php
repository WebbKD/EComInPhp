<?php include '../views/viewheader.php'; ?>
<br/>
<div class="card">
    <div class="card-content">
        <div class="container">
        <form class="col s12" id="login_user_form" action="index.php" method="post">
          <input type="hidden" name="action" value="login"/>
          <div class="row">
            <div class="input-field col s12">
              <input placeholder="User Name" id="userName" type="text" name="username" class="validate">
              <label for="userName">User Name</label>
            </div>
          </div>
          <div class="row">
              <div class="input-field col s12">
              <input placeholder="Password" id="password" type="text" name="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="center-align">
          <button class="btn waves-effect" type="submit" name="Login">Login</button>
          </div>
        </form>
        <a class="btn" href="?action=register">Sign Up</a>
        </div>
    </div>
</div>
<h1 class="white-text"><?php echo $error; ?></h1>
<?php include '../views/viewfooter.php'; ?>