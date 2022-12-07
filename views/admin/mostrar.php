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
    </section><!-- End Breadcrumbs -->

<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding:0">
  <div class="container-fluid px-0">
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
  
    </tr>
  </thead>
  <tbody>
  <?php 
  $contador=0;
    foreach($usuarios as $row){
    
   
    ?>

    <tr>
      <th scope="row"><?php echo $contador=$contador+1 ?></th>
      <td><?php  echo $row->usuario; ?> </td>
      
    
    </tr>
    
    <?php  } ?>
  </tbody>
</table>
  </div>



</section>
</main>