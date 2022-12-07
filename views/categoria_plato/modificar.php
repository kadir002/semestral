<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
<div class="container">

<div class="d-flex justify-content-between align-items-center">
  <h2>Agregar Categoria</h2>
  <ol>
	<li><a href="/">Home</a></li>
	
	<li> <a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("mostrar") ?>">categoria</a> </li>
	<li>Agregar Categoria</li>
  </ol>
</div>

</div>
</section><!-- End Breadcrumbs -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container-fluid px-0">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">Modificar</span>
						<h2 class="mb-4">Modificar Categoria</h2>
					</div>
					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("actualizar") ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Descripcion <span class="text-danger">(*)</span></label>
									<input type="text" class="form-control" placeholder="Descripción de categoria" name="txtDescripcion" value="<?php echo isset($resultado->nombre_categoria) ? $resultado->nombre_categoria : "" ?>">
									<span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>
									<input type="hidden" name="_id" value="<?php echo $id ?>">
								</div>
							</div>


							<div class="col-md-12 mt-12">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">

								<div class="form-group">
									<div class="row">
										<div class="col-md-6"><span class="text-danger">(*) Obligatorio</span></div>
										<br><br>
									</div>
									<input type="submit" value="Guardar >" class="btn btn-success py-3 px-5">

								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>
</main>