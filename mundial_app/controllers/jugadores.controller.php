<?php
require_once './mundial_app/models/paises.model.php';
require_once './mundial_app/models/jugadores.model.php';
require_once './mundial_app/views/jugadores.view.php';

Class jugadoresController{
    private $model;
    private $view;
    private $modelPaises;

    public function __construct(){
        $this->model = new jugadoresModel();
        $this->view = new jugadoresView();
        $this->modelPaises = new paisesModel();
    }
    //función para obtener todos los jugadores de un solo pais (listado de items x categoria)
    function showJugadoresByPais($paisSelected){ 
        $pais = $this ->modelPaises ->getPais($paisSelected);
        $jugadores = $this -> model -> getJugadoresByPais($pais);
        $this -> view -> showJugadoresByPais($jugadores, $pais);
    }

    //función para obtener todos los jugadores (listado de items)
    function showJugadores(){
        $paises = $this -> modelPaises -> getPaises();
        $jugadores = $this-> model -> getJugadores();
        $this-> view -> showJugadores($jugadores, $paises);
    }

    //función para obtener detalle de un solo jugador (detalle de item)
    function showDataJugador($id){ 
        $jugador = $this -> model -> getJugador($id);
        $pais = $this -> modelPaises -> getPaisJugador($jugador->id_pais);
        $this -> view -> showJugador($jugador, $pais);
    }

    //función para renderizar el formulario con los datos precargados para editar
    function showFormularioEdit($id){
        $paises = $this -> modelPaises -> getPaises();
        $jugador = $this -> model -> getJugador($id);
        $nombre = $jugador->nombre;
        $apellido = $jugador->apellido;
        $descripcion = $jugador->descripcion;
        $posicion = $jugador->posicion;
        $foto = $jugador->foto;
        $this -> view -> showFormularioEdit($id,$nombre, $apellido, $descripcion,$posicion, $foto, $paises);
    }

    //función para renderizar el formulario agregar nuevo jugador
    function showFormularioAdd(){
        $paises = $this -> modelPaises -> getPaises();
        $this -> view -> showFormularioAdd($paises);
    } 
    
    //Borra un jugador según id
    function deleteJugador($id){
        $this-> model -> deleteJugador($id);
        header("Location:".BASE_URL."jugadores");
        die();
    }

    //Agrega un nuevo jugador
    function addJugador(){
        $jugador = $this -> getDatosFormulario(); 
        $id = $this -> model -> addJugador($jugador['nombre'], 
                                           $jugador['apellido'], 
                                           $jugador['descripcion'], 
                                           $jugador['posicion'], 
                                           $jugador['foto'], 
                                           $jugador['pais']);
        header('Location:'.BASE_URL.'jugador/ver/'.$id);
        die();
    }

    //Edita un jugador según id
    function editarJugador($id){
        $jugador = $this ->getDatosFormulario(); 
        $this -> model ->editarJugador($jugador['nombre'], 
                                       $jugador['apellido'], 
                                       $jugador['descripcion'], 
                                       $jugador['posicion'], 
                                       $jugador['foto'], 
                                       $jugador['pais'], 
                                       $id);
        header('Location:'.BASE_URL.'jugador/ver/'.$id);
        die();
    }

    //función que obtiene los datos del formulario
    private function getDatosFormulario(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $descripcion = $_POST['descripcion'];
        $posicion = $_POST['posicion'];
        $foto = $_POST['foto'];
        $pais = $_POST['pais'];
        if(!empty($nombre) && !empty($apellido) && !empty($descripcion) 
            && !empty($posicion) && !empty($foto) && !empty($pais)){
            $jugador = ["nombre"=>$nombre,
                        "apellido"=>$apellido,
                        "descripcion"=>$descripcion,
                        "posicion"=>$posicion,
                        "foto"=>$foto,
                        "pais"=>$pais]; 
            var_dump($jugador);
            return $jugador;
        }else{
            //header('Location:'.BASE_URL.'error');
            echo "error no se pueden dejar campos vacios";
        }        
    }
}