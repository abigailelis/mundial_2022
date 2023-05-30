<?php

Class jugadoresModel{
    private $db; 

    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost:4306;'.'dbname=db_mundial;charset=utf8', 'root', ''); 
        //Creó un grupo de BBDD y lo guardo en ese mismo grupo.
    }

    function getJugadores(){//función para obtener todos los jugadores
        $sentencia = $this->db->prepare("SELECT * FROM jugadores");
        $sentencia->execute();
        $jugadores= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }
    
    function getJugador ($id) {//función para obtener un jugador ($jugador->id)
        $sentencia = $this->db->prepare("SELECT * FROM jugadores WHERE (id)=:id");
        $sentencia->execute(array(":id"=>$id));
        $jugador= $sentencia->fetch(PDO::FETCH_OBJ);
        return $jugador;
    }

    //función para obtener los jugadores segun pais ($pais->id)
}