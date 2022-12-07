<main id="main">
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reporte usuarios</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Reporte usuarios</li>
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
      <th>status</th>
       <th>Gasto</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $contador=0;
    foreach($report as $row){
    
   
    ?>

    <tr>
      <th scope="row"><?php echo $contador=$contador+1 ?></th>
      <td><?php  echo $row->first_name; ?> </td>
      <td><?php echo $row->payment_status==1?"pago":"sin pagar" ; ?></td>
      <td><?php  echo $row->mc_gross; ?> </td>
    
    </tr>
    
    <?php  } ?>
  </tbody>
</table>
  </div>



</section>
</main>