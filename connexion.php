<?php
    if (!function_exists('connexion')) {
        function connexion(){
            static $connect = null;

            if ($connect === null) {
                $host = '172.10.0.113';
                $username = 'ETU002370';
                $password = '2NQ2IPQbW87R';
                $database = 'db_p16_ETU002370';

                // $host = 'localhost';
                // $username = 'root';
                // $password = '';
                // $database = 'the';

                $connect = mysqli_connect($host, $username, $password, $database);

                if (!$connect) {
                    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
                }
            }

            return $connect;
        }
    }
?>