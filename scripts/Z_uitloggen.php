<?php
try
{
	require_once("../php_lib/initialisatie.php");

	If (isset($_POST['submit']))
	{
		$_action="Uitgelogd";
		
		require_once('../php_lib/logSecurityInfo.php');
		logSecurityInfo($_SESSION['mail'], $_action);
	
		session_destroy(); // vernietig de sessie
		header('Location:../scripts/A_logon.php'); // keer terug naar de logon-pagina
		exit;
	}

	require("../code/output.inc.php");
}

catch (Exception $_exception) //********** exception handling
{
  require("../php_lib/myExceptionHandling.inc.php"); 
}



?>