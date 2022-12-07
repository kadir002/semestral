<main id="main">

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Administrar Plato</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Administrar Plato</li>
                </ol>
            </div>

        </div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb" style="padding:0">
        <div class="container mt-5">
            <div class="heading-section ftco-animate mb-5">

                <h2 class="mb-4">Datos de platos</h2>
            </div>
            <div class="row d-flex no-gutters">
                <form action="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("modificar_plato") ?>" method="POST" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col">
                        <label for="txtNombre">nombre</label>
                        <input type="text" name="txtNombre" class="form-control" value=" <?php
                                                                        echo $data["nombre_plato"];
                                                                        ?>">
                    </div>
                    <div class="col">
                    <label for="txtDescripcion">Descripcion</label>
                        <input type="text" name="txtDescripcion" class="form-control" value="<?php echo $data["descripcion_plato"]; ?>">
                    </div>
                </div>
                <div class="row mt-2">

                <div class="col">
                <label for="txtPrecio">Precio</label>
                        <input type="text" name="txtPrecio" class="form-control" value="<?php echo $data["precio_plato"]; ?>">
                    </div>
                
                    <div class="col">
                    <label for="txtFoto">Imagen</label>
                        <input type="file" name="txtFoto" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $data["_id"] ?>">
                <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                <div class="text-center mt-4">
                    <button class="btn btn-primary" type="submit">actualizar</button>
                </div>
                </form>
            </div>
        </div>

    </section>
</main>