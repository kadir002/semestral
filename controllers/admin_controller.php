<?php 


require_once("utils/seg.php");
require_once("utils/utils.php");
require_once("models/usuario.php");
require_once("models/categoria_plato.php");
require_once("models/plato.php");
require_once("models/pagos_paypal.php");

class admin_controller{


    public static function usuario_register(){
        $objUsuario  = new usuario();
        $usuarios= $objUsuario->getAllUser();
    
        require_once("views/template/header.php");
    
        require_once("views/admin/mostrar.php");
        require_once("views/template/footer.php");
    }


    public static function reporte_register(){
        $objUsuario  = new pagos_paypal();
        $report= $objUsuario->getReportpaymet();

      
        require_once("views/template/header.php");
      
        require_once("views/admin/mostrar_paymet.php");
        require_once("views/template/footer.php");
    }


    public static function subcripcion(){

        $objUsuario  = new pagos_paypal();
        $report= $objUsuario->getReportSubscript();
        require_once("views/template/header.php");

        require_once("views/admin/subcripcion.php");
        require_once("views/template/footer.php");
    }
}

