<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct($logueado, $usuario){
        $this-> smarty = new Smarty();
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this-> smarty -> assign('logueado', $logueado);
        $this-> smarty -> assign('usuario', $usuario);
    }
    //función para mostrar todos los paises
    function mostrarPaises($paises){
        $this -> smarty -> assign('titulo', 'Mundial 2022');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/paises.tpl');
    }

    function mostrarFormularioEditarPais($id, $pais){
        $action = "paises/editar/".$id;
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('titulo', 'Editar pais');
        $this -> smarty -> assign ('nombre', $pais->nombre);
        $this -> smarty -> assign ('continente', $pais->continente);
        $this -> smarty -> assign ('clasificacion', $pais->clasificacion);
        $this -> smarty -> assign ('bandera', $pais->bandera);
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    function mostrarFormularioAgregarPais(){
        $this -> smarty -> assign ('action','paises/agregar');
        $this -> smarty -> assign ('titulo', 'Agregar pais');
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    //Muestra la pagina Home
    function mostrarInicio(){
        $this -> smarty -> assign ('titulo', 'Mundial 2022');
        $this -> smarty -> display('./templates/home.tpl');
    }

    //Consulta si estas seguro de borrar el pais.
    function mostrarMsgBorrar($id){
        $action = 'paises/borrar/'.$id;
        $this -> smarty -> assign ('titulo', 'Borrar pais');
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('elemento', 'Pais');
        $this -> smarty -> display('./templates/msgBorrar.tpl');
    }

    //Muestra la pagina de error.
    function mostrarError($msg){
        $this -> smarty -> assign ('titulo', 'Error');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }
}