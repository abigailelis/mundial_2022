<?php

Class jugadoresModel{
    private $db; 

    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=db_mundial;charset=utf8', 'root', ''); 
        //Creó un grupo de BBDD y lo guardo en ese mismo grupo.
    }

    //función para obtener todos los jugadores

    //función para obtener un jugador ($jugador->id)

    //función para obtener los jugadores segun pais ($pais->id)
}