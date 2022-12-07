<?php
    class bd{
            public static function connection(){
                require_once("vendor/autoload.php");
              

                $cliente = new MongoDB\Client('mongodb+srv://kadir0202:LY2pVhpc2VPJAR9G@cluster0.kyjkyvx.mongodb.net/?retryWrites=true&w=majority');
                $conexion = $cliente->selectDataBase("semestral");
                return $conexion;
            }

    }
