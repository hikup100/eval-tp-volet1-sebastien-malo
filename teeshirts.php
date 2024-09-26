<?php
// Définir la variable $page pour indiquer la page affichée.
$page = 'teeshirts';

// Inclure la partie de haut de la page.
include('parties-communes/entete.php');
?>
<?php 
	$teeshirtsChaine = file_get_contents("data/teeshirts.json");
	$teeshirts = json_decode($teeshirtsChaine)
 ?>
<style>
	main.page-produits .principal {
		width: 70vw;
		margin: 2rem auto;
		column-gap: 2rem;
		display: flex;
    	flex-direction: row;
    	flex-wrap: wrap;
    	justify-content: space-around;
    	align-items: start; 
	}

	main.page-produits .principal .produit {
		width: 250px;
	}	

	main.page-produits .principal .produit .prix {
		font-weight: bold;
	}

	main.page-produits .principal .produit .image img {
    	width: 250px;
	}
</style>
<main class="page-produits page-teeshirts">
	<article class="amorce">
		<h1><?= $_->titrePage ?></h1>
	</article>
	<article class="principal">
		<?php foreach($teeshirts as $teeshirt) { ?>
		<div class="produit">
			<span class="image">
				<img src="images/produits/teeshirts/<?= $teeshirt -> id ?>.webp" alt="<?= $teeshirt -> nom ?>">
			</span>
			<span class="nom"><?= $teeshirt -> nom ?></span>
			<span class="prix"><?= $teeshirt -> prix ?>$</span>
		</div>
		<?php } ?>
	</article>
</main>
<?php include('parties-communes/pied2page.php'); ?>