<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include 'views/head.html'?>
    <title>Deliveroo</title>
</head> 
    <body>
		
	<header id="hero" class="marge">
		<!-- Navigation -->
		<nav id="nav1">
			<a class="ctn-logo" href="index.php">
				<img src="img/logo-white.png" alt="Logo Deliveroo">
				<span class="logo-title">Deliveroo</span>
			</a>
			<ul class="nav-list">
				<a id="login1" class="border" href=""><i class="fas fa-home"></i>Inscription/Connexion</a>
				<button id="menu-show" class="border"><i class="fas fa-bars"></i>Menu</button>
			</ul>
		</nav>
		<!-- Hero -->
		<section class="banner">
			<section class="banner__search">
				<h1 class="search__h1">Vos restaurants préférés, livrés chez vous en un clic</h1>
				<div class="search__search-block">
					<p>Entrez votre adresse pour trouver les restaurants à proximité</p>
					<section class="section__input">
						<label id="search__input"><input class="search__input" placeholder="Que voulez-vous manger ?" /></label>
						<button class="search__button"><a href="menu.php">Rechercher</a></button>
					</section>
					<p class="search__info"><a class="search__link" href="menu.php">Connectez-vous </a>pour vos adresses récentes.</p>
				</div>
			</section>
			<figure class="banner__figure">
				<img class="banner__img" src="img/service-livraison.png" alt="Service de livraison" />
			</figure>
		</section>
	</header>

    <!-- Menu toogle -->
    <?php include 'views/nav-toggle.html' ?>
	
    <div style="width: 100%; height: 100px"></div><!-- Marge. -->
<main>

<section class="marge">

	<!-- Début Nourriture type -->
	<h1>Vous souhaitez plus d'options ?</h1>
        <section class="type-nourriture">
            <ul class="type-nourriture__liste">
                <li><a href="menu.php">Chinois</a></li>
                <li><a href="menu.php">Japonais</a></li>
                <li><a href="menu.php">Orientale</a></li>
                <li><a href="menu.php">Pizza</a></li>
                <li><a href="menu.php">Grec</a></li>
                <li><a href="menu.php">Libanais</a></li>
                <li><a href="menu.php">Americain</a></li>
                <li><a href="menu.php">Italien</a></li>
                <li><a href="menu.php">Thaï</a></li>
                <li><a href="menu.php">Végétarien</a></li>
            </ul>
        </section>    
    <!-- Fin nourriture type-->
	<!-- Debut partie exigence-->
	<section class="exigence">
		<div class="card-exigence">
				<div class="case-exigence__case1">
					<a href="index.html">
						<img src="img/halal.jpg" alt="Nourriture Halal">
						<div class="product">
							<a class="card-exigence__btn" href="menu.php">
							<button class="btn_restau">
								<span class="btn_restauspan">Voir les restaurants Halal</span>
							</button>
							</a>
						</div>  
					</a> 
				</div>
				<div class="case-exigence__case2">
				<a href="index.html">
						<img src="img/vegan.jpg" alt="Nourriture Vegan">
						<div class="product">
							<a class="card-exigence__btn" href="menu.php">
							<button class="btn_restau">
								<span class="btn_restauspan">Voir les restaurants Vegan</span>
							</button>
							</a>
						</div>  
					</a> 
				</div>
				<div class="case-exigence__case3">
					<a href="index.html">
						<img src="img/sansglutten.jpg" alt="Nourriture sans gluten">
						<div class="product">
							<a class="card-exigence__btn" href="menu.php">
							<button class="btn_restau">
								<span class=".btn_restauspan">Voir les restaurants Sans glutten</span>
							</button>
							</a>
						</div>  
					</a> 
				</div>
				<div class="case-exigence__case4">
					<a href="index.html">
						<img src="img/vegan.jpg" alt="Nourriture Vegan">
						<div class="product">
							<a class="card-exigence__btn" href="menu.php">
							<button class="btn_restau">
								<span class="btn_restauspan">Voir les restaurants Végétarien</span>
							</button>
							</a>
						</div>  
					</a>  
				</div>
		</div>
</section>

</section>


	<div style="width: 100%; height: 100px"></div><!-- Marge. -->

<section class="informations-entite marge">
	<section class="informations-entite__informations">
		<h2>Pizzamerican</h2>
		<ul class="note note-4">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<span class="note-avis">(42 avis)</span>
		</ul>
		<p>Venez déguster d'excellentes pizzas chez Pizzamerican. Notre terrasse vous garantie un moment tranquille en famille ou entre amis. Nous proposons plus de 20 variétés de pizzas à la carte !</p>
		<p>Une boisson vous est offerte pour toute commande de pizza.</p>
		<p>Profitez d'une réduction pour votre première commande !</p>
	</section>
	<section class="informations-entite__image">
		<figure>
			<img src="img/pizza.jpg" alt="Pizzas avec savoir faire artisanal" />
		</figure>
	</section>
</section>


	<div style="width: 100%; height: 100px"></div><!-- Marge. -->


<aside id="cart_fill">
	<div id="cart_fixed" onclick="cart()">Panier</div>
	<div id="cart_content">
		<h2>Votre panier contient :</h2>
		<br />
		<article>
			<h3>Quatre fromages</h3>
			<p>Cheddar, Compté, Gorgonzola, Mozzarella, Sauce tomate, Basilic</p>
			<section><p>10.00 €</p><p>x1</p><p>10.00 €</p></section>
		</article>
		<br />
		<article>
			<h3>Reine</h3>
			<p>Jambon, Champignon, Gruyère, Sauce tomate, Basilic, Huile d'olive</p>
			<section><p>10.00 €</p><p>x2</p><p>20.00 €</p></section>
		</article>
		<br />
		<article>
			<h3>Paysanne</h3>
			<p>Pomme de terre, Jambon, Jambon cru, Baccon, Oignon, Gruyère, Crème fraîche</p>
			<section><p>12.00 €</p><p>x1</p><p>12.00 €</p></section>
		</article>
		<br />
		<p>Total : 42.00 €</p>
		<br />
		<button>Commander</button>
	</div>
	<div id="after_cart" onclick="cart()"></div>
</aside>

<!-- VERSION MOBILE. -->
<aside id="cart_fill__mobile">
	<div id="cart_fixed__mobile" onclick="cart_mobile()">Panier</div>
	<div id="cart_content__mobile">
		<h2>Votre panier contient :</h2>
		<br />
		<article>
			<h3>Quatre fromages</h3>
			<p>Cheddar, Compté, Gorgonzola, Mozzarella, Sauce tomate, Basilic</p>
			<section><p>10.00 €</p><p>x1</p><p>10.00 €</p></section>
		</article>
		<br />
		<article>
			<h3>Reine</h3>
			<p>Jambon, Champignon, Gruyère, Sauce tomate, Basilic, Huile d'olive</p>
			<section><p>10.00 €</p><p>x2</p><p>20.00 €</p></section>
		</article>
		<br />
		<article>
			<h3>Paysanne</h3>
			<p>Pomme de terre, Jambon, Jambon cru, Baccon, Oignon, Gruyère, Crème fraîche</p>
			<section><p>12.00 €</p><p>x1</p><p>12.00 €</p></section>
		</article>
		<br />
		<p>Total : 42.00 €</p>
		<br />
		<button>Commander</button>
	</div>
</aside>
<!-- FIN VERSION MOBILE. -->

		<section id="renseignement" class="container marge">
			<h1>Tout chaud !</h1>
			
			<section class="row">
				<article class="row__article">
					<figure class="clipPath">
						<img src="img/sushi.jpg" alt="Manger des sushis">
					</figure>
				</article>
				<article class="row__article row__info">
					<h2>Deliveroo For Work</h2>
					<p>Employés ou clients affamés, notre équipe corporate est là pour vous aider.</p>
					<button class="search__button">Se renseigner</button>
				</article>
			</section>
			
			<section class="row">
				<article class="row__article">
					<figure class="clipPath">
						<img src="img/donut.jpg" alt="Manger des donuts">
					</figure>
				</article>
				<article class="row__article row__info">
					<h2>Deliveroo For Work</h2>
					<p>Employés ou clients affamés, notre équipe corporate est là pour vous aider.</p>
					<button class="search__button">Se renseigner</button>
				</article>
			</section>
			
		</section>

		<div style="width: 100%; height: 100px"></div><!-- Marge. -->

</main>		
        <footer>
            <?php include 'views/footer.html' ?>
        </footer>


    <script src="js/alan.js"></script>
    <script src="js/kester.js"></script>

</body>
</html>