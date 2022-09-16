<?php
try
{
	require_once("../code/initialisatie.inc.php");
	/*******************************************
*    (Input en) verwerking
********************************************/

	if (! isset($_POST['submit']))
	{

		$_output= "<form action=$_srv method= POST>
		<label>tekst</label><br>
		<textarea  name='inhoud' rows='4' cols='50'>
    </textarea> 
    <script >   
        CKEDITOR.replace( 'inhoud' ); 
    </script>
		<br><br>
		<input type=submit name=submit value =submit></form>";
	}

	else
	{
		$_output="<h1>Bewerkte text</h1><hr><br>".$_POST['inhoud']."<br><hr>";
	}

/*******************************************
*    output
********************************************/  
	// menu definieren  
	$_menu = 0;
	// commentaar file definieren  
	$_commentaar = 'A_home_C.html';
	//extra javascripts includes		
	$_jsInclude = array("../ckeditor/ckeditor.js");

	require("../code/output.inc.php");

}
catch (Exception $_exception)
{
  // exception handling funtions 
  require("../php_lib/myExceptionHandling.inc.php"); 
}
?>