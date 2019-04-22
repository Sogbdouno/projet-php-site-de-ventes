<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="widh+device-widh,initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div id="top">
		<div class="conteneur">
			<div class="col-md-6.offer">
          <a href="#" class="btn btn-success btn-sm">WELCOME</a>
          <a href="checkout.php">4 articles dans votre panier|total prix:50000 FCFA</a>
				</div>
        <div class="col-md-6">
        	<ul class="menu">
          	<li><a href="registre-client.php">Registre client</a></li>
            <li><a href="checkout.php">Mon compte</a></li>
            <li><a href="vente.php">Aller au panier</a></li>
            <li><a href="login.php">S'identifier</li>
					</ul>
        </div>
      </div>
    </div><!--premiere partie finie-->

    <div id="navbar" class="navbar navbar-default">
			<div class="conteneur">
				<div class="navbar-header"><!--navbar header fbegin-->
					<a href="home.php" class="navbar-brand home">
						<img src="images/logo.png" alt="logo" class="hidden-xs">
            <img src="images/livre.png" alt="logo" class="visible-xs">
					</a>
					<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button class="navbar-toggle" data-toggle="collapse" data-target="#search#">
          	<span class="sr-only">Toggle search</span>
						<i class="fa fa-search"></i>
					</button>
        </div><!--navbar header finish-->

				<div class="navbar-collapse collapse"  id="navigation">
					<div class="padding-nav">
						<ul class="nav navbar-nav left">
            	<li class="active"><a href="home.php">Home</a></li>
              <li><a href="catalogue.php">Catalogue</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li><a href="compte.php">Mon compte</a></li>
              <li><a href="panier.php">Les achats</a></li>
              <li><a href="contact.php">Contact</a></li>
						</ul>
          </div>
					<a href="panier.php" class="btn navbar-btn btn-primary right">
						<i class="fa fa-shopping-cart"></i>
          	<span>Les articles de votre choix</span>
					</a>
          <div class="navbar-collapse collapse right">
          	<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
          		<span class="sr-only">Toggle search</span>
              <i class="fa fa-search"></i>
						</button>
          </div>
					<div class="collapse clearfix" id="search">
						<form method="get" action="results.php" class="navbar-form">
            	<div class="input-group">
              	<input type="text" class="form-control"  placeholder="Recherche" name="user_query" required>
                <span class="input-group-btn">
									<button type="submit" name="search" value="Recherche" class="btn btn-primary">
                		<i class="fa fa-search"></i>
									</button>
                </span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="images/photo1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/photo2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/photo3.jpg" alt="Third slide">
		    </div>
				<div class="carousel-item">
		      <img class="d-block w-100" src="images/photo4.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
