
<main id="main">
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reporte subcription</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Reporte subcription</li>
          </ol>
        </div>

      </div>
    </section>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Dia</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $contador=0;
    foreach($report as $row){
    
   
    ?>

    <tr>
      <th scope="row"><?php echo $contador=$contador+1 ?></th>
      <td><?php  echo $row->correo; ?> </td>
      <td><?php  echo $row->fecha_registro; ?> </td>
    
    </tr>
    
    <?php  } ?>
  </tbody>
</table>
</main>