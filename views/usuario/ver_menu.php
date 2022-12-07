<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs"  style=" height:400px; 
width:100%;
background-repeat: no-repeat;
background-size: 100% 100%;
background-image:  url('<?php echo $_SESSION["logo_banner"]; ?>')">
  <div class="container">

	<div class="d-flex justify-content-between align-items-center">
	  <h2>ver menu</h2>
	  <ol>
		<li><a href="">Home</a></li>
		<li>ver menu</li>
	  </ol>
	</div>

  </div>
</section><!-- End Breadcrumbs -->
<section class="ftco-section">
	<div class="container-fluid px-4">
		<div class="row justify-content-center mb-5 pb-2">
		</div>
		<div class="row">
			<?php
			

			
			foreach ($listaCat as $categoria) { ?>
				<div class="col-md-6 col-lg-4 card" style="width: 18rem;">
					<div class="heading-menu text-center ftco-animate">
						<h3><?php echo $categoria["nombre_categoria"] ?></h3>
					</div>
					<?php
					foreach ($listaPlat as $plato)
						if ((new MongoDB\BSON\ObjectId($plato->_id_categoria)) == $categoria["_id"]) { ?>
						
                    <img class="card-img-top" style="width:250px;" src="<?php echo $plato["foto_plato"] ?>" alt="">
 							<div class="card-body">
								<div class="d-flex">
									<div class="one-half">
										<h3><?php echo $plato["nombre_plato"] ?></h3>
									</div>
									<div class="one-forth">
										<span class="price">$<?php echo $plato["precio_plato"] ?></span>
									</div>
								</div>
								<p><?php echo $plato["descripcion_plato"] ?></p>
							</div>
						
					<?php } ?>
				</div>
			<?php }  ?>
		

			
		</div>
</section>
</main>