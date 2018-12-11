<?php
include 'db.php';
class User extends DB{
    public $nombre;
    public $usuario;
    public function userExists($user, $pass){
       
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario =:user AND clave =:pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario =:user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usuario = $currentUser['usuario'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>