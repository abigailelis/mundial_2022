<?php

require_once './mundial_app/models/jugadores.model.php';
require_once './mundial_app/views/jugadores.view.php';

Class jugadoresController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new jugadoresModel();
        $this->view = new jugadoresView();
    }
    
}