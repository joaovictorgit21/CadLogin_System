<?
    class DatabaseModel {
        private static $instance = null;

        public static function getConnection() {
            if (!self::$instance) {
                $host = 'localhost';
                $db = 'sistema_usuario';
                $user = 'root';
                $pass = '';

                // $host           = '185.173.111.184';
                // $db             = 'u858577505_cadlogin1';
                // $user           = 'u858577505_cadlogin1';
                // $pass           = '@#Hostinger023@_';   

                // Driver MySQL(mysql:) e as informações de host e DB
                self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

                // Define um modo de erro para exeções, facilitando a depuração e tratamento de erros
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$instance;
        }
    }
?>