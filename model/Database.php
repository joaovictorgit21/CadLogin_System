<?
    class Database {
        private static $instance = null;

        public static function getConnection() {
            if (!self::$instance) {
                $host = 'localhost';
                $db = 'sistema_usuario';
                $user = 'root';
                $pass = '';

                // Driver MySQL(mysql:) e as informações de host e DB
                self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

                // Define um modo de erro para exeções, facilitando a depuração e tratamento de erros
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$instance;
        }
    }
?>