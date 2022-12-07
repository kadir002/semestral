<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Crear Categoría</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Crear Categoría</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding:0">
  <div class="container-fluid px-0">
    <div class="row d-flex no-gutters">
      <div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
        <div class="py-md-5">
          <div class="heading-section ftco-animate mb-5">
            <span class="subheading">Listado</span>
            <h2 class="mb-4">Listado de Categorias</h2>
          </div>
          <div class="row">
            <div class="col-md-8">
              <a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("registro") ?>"><button type="button" class="btn btn-success btn-lg">Agregar Categoría</button></a>
              <br><br>
              <table class="table table-light   table-hover table-bordered table-sm table-responsive-sm">
                <thead>

                  <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>
                  </tr>

                </thead>
                <tbody>
                  <?php foreach ($resultado as $r) { ?>
                    <tr>
                      <td><?php echo $r->nombre_categoria ?></td>
                      <td><a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("modificar") . "&id=" . $r->_id ?>"><button type="button" class="btn btn-primary btn-sm">Modificar</button></a>
                        <a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("eliminar") . "&id=" . $r->_id ?>"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a>
                      </td>

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
</section>
</main>