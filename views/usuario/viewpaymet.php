<main id="main">




<section class="breadcrumbs">
  <div class="container">

	<div class="d-flex justify-content-between align-items-center">
	  <h2>Registrar</h2>
	  <ol>
		<li><a href="/">Home</a></li>
		<li>Registrar</li>
	  </ol>
	</div>

  </div>
</section><!-- End Breadcrumbs -->


<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 0;">
	<div class="container-fluid px-0">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
                <div class="heading-section ftco-animate mb-5">
						
						<h2 class="mb-4">Factura</h2>
					</div>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Detalle</th>
      <th scope="col">Monto</th>
      <th scope="col">Ciudad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $result["item_name"]; ?></td>
      <td><?php echo $result["amount"]; ?> </td>
      <td><?php echo $result["country"] ?> </td>
    </tr>
  
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</section>

</main>