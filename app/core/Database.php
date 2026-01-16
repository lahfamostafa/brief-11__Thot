<?php
    class Database{
        public static ?PDO $conn = null;
        public static function connect(){
            if(self::$conn === null){
                try{self::$conn = new PDO("mysql:host=localhost;dbname=Thoth", "root","");
                    self::$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch (PDOException $e){
                    echo "eroor connexion" . $e->getMessage();
                }
            }
            return self::$conn;
        }
    }
?>