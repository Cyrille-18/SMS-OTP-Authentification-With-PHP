<?php
require 'DB_Config.php';

try {
    $PDO = new  PDO($DSN, $DB_USER, $DB_Password);

   echo  'Connexion &eacute;tablie !';
}
catch (PDOException $exception)
{
    echo 'ERREUR : '.$exception->getMessage();
}