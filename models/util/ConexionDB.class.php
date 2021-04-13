<?php
 
    class ConexionDB extends PDO {
        public function __construct () {
            try {
                parent:: __construct('mysql:host='.DB_HOST.';dbname='.DB_DATA.'; charset=utf8', DB_USER, DB_KEY);
                parent:: setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $ex) {
                die ('La Base de Datos no Existe');
            }
        }

        function __destruct() {
        }
    }
?>