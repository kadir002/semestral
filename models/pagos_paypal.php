<?php
require_once("utils/bd.php");
require_once("models/usuario.php");

class pagos_paypal
{
    public function registrar($_peticion)
    {
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        try {
            $resultados = $coleccion->insertOne($_peticion);
            $coleccion = $conexion->usuario;
            try {
                $resultados = $coleccion->updateOne(
                    ["cuenta_paypal" => "kadir"],
                    ['$set' => [
                        "monto_pago" => "49"
                    ]]
                );
                $_SESSION["monto_pago"] = "49";
                return $resultados->getModifiedCount();
            } catch (Exception $e) {
                return 0;
            }
        } catch (Exception $e) {
        }
    }

    public function registrarPaymet(){
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_report;
        try {
            $resultados = $coleccion->insertOne([
                "Payer_id" => $_SESSION["id_usuario"],
                "payment" => "49.99",
                "date" => date("Y-m-d"),
                "payment_status" => true,
                "first_name" => $_SESSION["nombre_contacto"],
                "receiver_id" => $_SESSION["usuario"],
                "mc_gross" => "49.99",
                "mc_fee" => "49.99"
            ]);
            $this->actualizarPay();
            $this->id = $resultados->getInsertedId();
            return $this;
        } catch (Exception $e) {
            return null;
        }
    }


    public function actualizarPay(){
        $conexion = bd::connection();
        $coleccion = $conexion->usuario;

          try {
            $resultados = $coleccion->updateOne(
                ["_id" => new MongoDB\BSON\ObjectId($_SESSION["id_usuario"])],
                ['$set' => [
                    "monto_pago" => "49.00",
                ]]
            );
        }catch (Exception $e) {
            return 0;
        }
    }
    


    public function getReportpaymet(){
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_report->find([]);

        return $coleccion;
    }

    public function getReportSubscript(){
        $conexion = bd::connection();
        $coleccion = $conexion->subcription->find([]);

        return $coleccion;
    }
}
