<?php
/*
    Model Users, obtiene todos los usuarios
*/

    class Usuarios{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        /**
         * Obtiene todos los usuarios
         */
        public function getUsers(){
            $this->db->query("SELECT * FROM usuarios");
            return $this->db->registros();
        }

        /**
         * Obtiene un usuario específico
         */
        public function getUser($id_user){
            $this->db->query("SELECT * FROM users
            WHERE id_user = :id_user");
        }

        public function registrarUsuario($data){
            $this->db->query("INSERT INTO usuarios (nombre, apellido, mail, password) VALUES (:nombre, :apellido, :mail, :password)");
            $this->db->bind(':nombre', $data['nombre']);
            $this->db->bind(':apellido', $data['apellido']);
            $this->db->bind(':mail', $data['mail']);
            $this->db->bind(':password', $data['password']);
            
            // if ($this->db->execute()) {
            //     return true;
            // } else {
            //     return false;            
            // }
        }

        public function actualizarDatosUsuario($data){
            
            $this->db->query("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, mail = :mail, password = :password WHERE id = :id");
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':nombre', $data['nombre']);
            $this->db->bind(':apellido', $data['apellido']);
            $this->db->bind(':mail', $data['mail']);
            $this->db->bind(':password', $data['password']);
            
        }
        

    }


?>