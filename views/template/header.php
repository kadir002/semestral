<!DOCTYPE html>
<html lang="en">

<head>
  <title>QRmenus - Menus para Restaurantes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta name="csrf-token" content="<?php seg::codificar("pagos_paypal") ?>">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <script src="https://www.paypal.com/sdk/js?client-id=ASk0MJWO0YMkrCRmajwNa77qzgpZ7DU8D1QqTieelSSAviyvhZS_8sJ3A-0b2l1xpLihA5Q7xQpOY64e"></script>





  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?php if (isset($_SESSION["logo_empresa"])) {
                    echo ($_SESSION["logo_empresa"]) ? $_SESSION["logo_empresa"] : "https://images.pexels.com/photos/1565982/pexels-photo-1565982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
                  } else {
                    echo "https://images.pexels.com/photos/1565982/pexels-photo-1565982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
                  } ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php if (isset($_SESSION["id_usuario"])) {
                                                      echo $_SESSION["nombre_contacto"];
                                                    }  ?></a></h1>

      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
          <?php if (!isset($_SESSION["id_usuario"])) { ?>
            <li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") ?>" class="nav-link">Entrar</a></li>
            <li class="nav-item cta"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="nav-link">Registro</a></li>
          <?php } else { ?>

          <?php }  ?>
          <?php if (isset($_SESSION["id_usuario"])) { 
            if ($_SESSION["monto_pago"] != 0) {

         
          ?>
          <?php if($_SESSION["tipo_usuario"] == 2){

           ?>
              <li>
                <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("modificar_cuenta") ?>">Actualizar mis datos</a>
              </li>
              <li><a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("mostrar") ?>">Administrar categorias de Platos</a></li>



              <li>
                <a href="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("mostrar") ?>">Administrar platos</a>
              </li>

              <li> <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("ver_menu") . "&id=" . $_SESSION["id_usuario"] ?>" target="_blank">Ver Menu</a></li>

              <li><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("view_paymet") ?>">Ver Pago</a></li>


              <li><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("vercodigoqr") ?>">Ver Codigo QR</a></li>
              <?php } ?>
              <?php if ($_SESSION["tipo_usuario"] == 1) {

              ?>

<li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("admin") . "&m=" . seg::codificar("reporte_register") ?>" class="nav-link">reporte usuarios</a></li>
                <li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("admin") . "&m=" . seg::codificar("usuario_register") ?>" class="nav-link">usuarios</a></li>
                <li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("admin") . "&m=" . seg::codificar("subcripcion") ?>" class="nav-link">subcripcion</a></li>
                <?php } ?>
              

          <?php  } ?>
          <li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>" class="nav-link">Cerrar Sesion</a></li>
       <?php  }  ?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->