<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public function __construct(){
        $this->host     ="localhost:3306";
        $this->db       ="bd_prueba";
        $this->user     ="root";
        $this->password ="";
        $this->charset  ="utf8mb4";
    }
    function connect(){
    
        try{
          
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
             /* if(!$connection){
       echo 'Error al conectar a la base de datos';
   }
else{
    echo 'Conectado a la base de datos';
}*/
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
            
        }   
    }
}
?>