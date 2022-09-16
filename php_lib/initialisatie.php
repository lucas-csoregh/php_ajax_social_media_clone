<?php
// session opstarten
session_start();

// instantiering van $_PDO
// ( connectie met dbms en selectie van de datbase )
require_once( '../connections/pdo.inc.php' );
//authorised???
require_once( '../php_lib/authorised.inc.php' );

//$_srv gebruiken we als 'action' in onze formulieren
$_srv = $_SERVER['PHP_SELF'];
$_inhoud = '';
$_commentaar = '';
$_jsInclude = array();
$_menu = 0;

// model ( database ) based drop-downs
//require_once( '../php_lib/dropDown.inc.php' );
?>