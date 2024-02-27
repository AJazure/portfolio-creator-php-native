<?php
    /*
    Controller Inicio muestra la vista de inicio de la plataforma (login)
    */
    class Inicio extends Controller {
        public function __construct() {
            //echo "Controller INICIO ejecutado."; die();
            // $this->UsuariosModel = $this->loadModel('Usuarios');
            
        }

        public function index() {

            // $usuarios = $this->UsuariosModel->getUsers();

            // $data = [
            //     'tituloPagina' => "bienvenido al login pibe, esto si es cine 🚬",
            //     'usuarios' => $usuarios,
            // ];

            // $this->loadView('pages/login', $data);
            $this->loadView('pages/register');

            
        }

    }

?>