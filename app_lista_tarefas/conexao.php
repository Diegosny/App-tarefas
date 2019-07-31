<?php

    namespace app_lista_tarefas\app_lista_tarefas;

    class Conexao
    {
        private $host = 'localhost';
        private $dbname = 'app_lista';
        private $user = 'root';
        private $pass = '';

        public function conectar()
        {
            try {

                $conexao = new \PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->pass");
                return $conexao;

            } catch (\PDOException $e) {
                echo '<p>'.$e->getMessege().'</p>';
            }
        }
    }
