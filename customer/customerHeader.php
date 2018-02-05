<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
        
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
        <title>The Network</title>
    </head>

    <body>
    <nav class="transparent nav-extended" role="navigation">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">The Network</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../">Home</a></li>
                <li><a href="../about">About</a></li>
                <li><a href="../services">Services</a></li>
                <li><a href="?action=customerStore">Store</a></li>
                <li><a href="?action=show_cart">Cart</a></li>
             </ul>
        </div>
        <div class="nav-content">
            <div class="container">
                 <span class="nav-title">Hello, <?php echo $_SESSION['login_Customer']; ?></span>
            </div>
        </div>    
    </nav>
    <br />
    <br />
  <main>