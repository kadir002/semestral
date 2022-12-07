<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->


<!-- loader -->
<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div> -->


<!-- <script src="js/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
  $.ajaxSetup({
    headers: {
      '': $('meta[name="csrf-token"]').attr('content')
    }
  });


  <?php if($_SESSION["monto_pago"]==0){?>
  paypal.Buttons({
    // Sets up the transaction when a payment button is clicked
    createOrder: (data, actions) => {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '77.44' // Can also reference a variable or function
          }
        }]
      });
    },
    // Finalize the transaction after payer approval
    onApprove: (data, actions) => {
      return actions.order.capture().then(function(orderData) {
        // Successful capture! For dev/demo purposes:
        // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
        const transaction = orderData.purchase_units[0].payments.captures[0];
        // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
        // When ready to go live, remove the alert and show a success message within this page. For example:
        // const element = document.getElementById('paypal-button-container');
        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
        // Or go to another URL:  actions.redirect('thank_you.html');

        document.formpaymet.submit();



      });
    }
  }).render('#paypal-button-container');
  <?php } ?>

<?php if($_SESSION["monto_pago"]!=0){?>

  new QRious({
  element: document.querySelector("#codigo"),
  value: "<?php echo $url ?>", // La URL o el texto
  size: 200,
  backgroundAlpha: 0, // 0 para fondo transparente
  foreground: "#8bc34a", // Color del QR
  level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)
});

new QRious({
  element: document.querySelector("#codigo1"),
  value: "<?php echo $url ?>", // La URL o el texto
  size: 200,
  backgroundAlpha: 0, // 0 para fondo transparente
  foreground: "#8bc34a", // Color del QR
  level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)
});
<?php }  ?>
</script>

</body>

</html>