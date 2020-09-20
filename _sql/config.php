<?php

require_once '../vendor/autoload.php';

/** Les constantes **/
define("DB_SERVER","localhost");
define("DB_USER","kevin");
define("DB_PWD","kevin");
define("DB_BDD","database_address_book");

//connexion à la base de données
$link = new PDO("mysql:host=" . DB_SERVER .";port=3306;dbname=" . DB_BDD,DB_USER,DB_PWD);
$link->exec("SET CHARACTER SET UTF8");
?>