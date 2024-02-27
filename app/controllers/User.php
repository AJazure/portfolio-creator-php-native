<?php
    /*
    Controller User
    */

    class User extends Controller {
        public function __construct() {
            //echo "Controller Páginas Cargado, este es el controller por defecto";
            $this->usuariosModel = $this->loadModel('Usuarios');
        }

        public function index() {
            //echo "index userphp 😀😀";
        }

        public function create() {
            
            //creo un nuevo usuario para cargarle datos
            // $user = new User();

            // $usuarios = $this->UsuariosModel->getUsers();

            // foreach ($usuarios as $usuario) {

            //     echo $usuario->nombre;

            // }

            $usuariosBD = $this->usuariosModel->getUsers();

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $pass_cifrada = password_hash($password, PASSWORD_DEFAULT, array("cost"=>10));

            foreach ($usuariosBD as $usuario) {
                
                if ($usuario->mail == $mail) {

                    echo 'El mail ya existe';
                    $this->loadView('pages/register');
                    exit();
                }
            }

            $data = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'mail' => $mail,
                'password' => $pass_cifrada
            ];

            $return = $this->usuariosModel->registrarUsuario($data);
            if($return){
                echo 'Usuario creado';
            }

        }

        
        public function store() {

        }

        
        public function show() {

        }

        
        public function edit() {

        }

        public function update() {

        }

    }

?>