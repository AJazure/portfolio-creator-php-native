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

    }


?>