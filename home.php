<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="widh+device-widh,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style1.css">

	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	   


  
  
 

	   
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


    <div class="container" id="slider">
    	<div class="col-md-12">
    		<div class="carousel-slide" id="myCarousel" data-ride="carousel">
    			<ol class="carousel-indicators">
    				<li class="active" data-target="#myCarousel" data-slide="0"></li>
    				<li data-target="#myCarousel" data-slide="1"></li>
    				<li data-target="#myCarousel" data-slide="2"></li>
    				<li data-target="#myCarousel" data-slide="3"></li>
    			</ol>

    			<div class="carousel-inner">
    				<div class="item">
    					<img src="images/photo1.jpg" alt="roman1">
    				</div>
    				<div class="item">
    					<img src="images/photo2.jpg" alt="roman2">
    				</div>
    				<div class="item">
    					<img src="images/photo3.jpg" alt="roman3">
    				</div>
    				<div class="item">
    					<img src="images/photo4.jpg" alt="roman4">
    				</div>
    			</div>
    		</div>
    	</div>
    	
    </div>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>