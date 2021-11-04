<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include 'views/head.html'?>
    <title>Deliveroo - Restaurant</title>
</head> 
<body>
<!-- Nav 2 -->
<header class="header">
	<?php include 'views/nav-main.html'?>
</header>
<?php include 'views/nav-toggle.html' ?>


<div class="header-restaurant marge">
        <div class="header-restaurant__text">
            <h1 class="header-restaurant__title">Sun grill</h1>
            <p class="header-restaurant__notation">4.7 excellent</p>
            <p class="textgrey">Sun grill By Saïgon Montreuil !! Découvrez nos plats qui sont préparé à la commande au feu vif de 300°C , à partir des produits frais et de qualité. D'excellentes grillades sont à votre disposition</p>
            <div class="allergene">
                <img src="./img/information.png" alt="icone information">
                <div class="allergene__text">
                    <p>Informations</p>
                    <a href="#">Allergènes et plus</a>
                </div>
            </div>
        </div>
        <aside>
            <img src="img/type/photo2.jpg" alt="grillade">
            <p>Livrée dans 15 - 25 min</p>
        </aside>
    </div>

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

	<div class="restaurant-menu marge">
		<div class="restaurant-menu__formule">
			<h1>NOS FORMULES🎉</h1>
		</div>
				<ul class="restaurant-menu__formulecontenu">
					<li>
						<section class="row">
							<article class="row__article">
								<h3>Formule pizza</h3>
								<p>Une boisson + pizza au choix</p>
								<p>Prix: 11€</p>
							</article>
							<article class="row__article row__figure">
								<figure class="article__img">
									<img src="img/type/photo2.jpg" alt="grillade">
								</figure>
							</article>
						</section>
					</li>
					<li>
						<section class="row">
							<article class="row__article">
								<h3>Formule pizza</h3>
								<p>Une boisson + pizza au choix</p>
								<p>Prix: 11€</p>
							</article>
							<article class="row__article row__figure">
								<figure class="article__img">
									<img src="img/type/photo2.jpg" alt="grillade">
								</figure>
							</article>
						</section>
					</li><li>
						<section class="row">
							<article class="row__article">
								<h3>Formule pizza</h3>
								<p>Une boisson + pizza au choix</p>
								<p>Prix: 11€</p>
							</article>
							<article class="row__article row__figure">
								<figure class="article__img">
									<img src="img/type/photo2.jpg" alt="grillade">
								</figure>
							</article>
						</section>
					</li>

				</ul>  
	</div>

	<footer>
		<?php include 'views/footer.html'?>
	</footer>

	<script src="js/alan.js"></script>
    <script src="js/kester.js"></script>
	

</body>
</html>