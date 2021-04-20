<?php

    namespace HUYLAND\Config;

    use PDO;

    class Database
    {
        private static $bdd = null;

        private function __construct(){}

        public static function getBdd() 
        {
            if(is_null(self::$bdd)) 
            {
                self::$bdd = new PDO("mysql:host=localhost;dbname=huy_land1", 'root', '');
            }

            return self::$bdd;
        }
        
    }

?>