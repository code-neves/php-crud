<?php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'root');
     define('PASS', '');
     define('BASE', 'cadastro');

        $conn = new MySQLi(DB_SERVER, DB_USERNAME, PASS, BASE);
         if($conn->connect_error){
               die("Falha na conexão: " . $conn->connect_error);
         }
        ?>