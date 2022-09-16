<?php
try{
  session_start();
  $_srv = $_SERVER['PHP_SELF'];
  require("../connections/pdo.inc.php");
  require("../php_lib/encrypt.php");
  require_once("../php_lib/logSecurityInfo.php");

  if (!isset($_POST['submit']))
  {
    //***************** formulier (in template) **************
    // is er een boodschap meegestuurd ?
    $_msg = (isset($_GET["msg"]))? $_GET["msg"] : " "; 
    // Smarty initialiseren
    require("../smarty/mySmarty.inc.php");
    // smarty variabelen toevoegen	
    $_smarty->assign('action', $_srv);
    $_smarty->assign('msg', $_msg);
    // display it
    $_smarty->display('logon.tpl');
  }
  else
  {

    //***************** voorbereidingen **************

    // externe niet gecontroleerde data naar interne gecontroleerde data
    $_mail = Htmlspecialchars($_POST['mail']);

    // encrypted paswoord salt is mail
    $_paswoord =encrypt($_POST['paswoord'],$_mail); 

    //***************** bestaat het mail ? **************
    $_query = "SELECT * FROM ts_users WHERE d_mail = '$_mail';"; 

    $_result = $_PDO->query($_query); 

    if (($_result -> rowCount() != 1)) // mail niet gekend
    {

      logSecurityInfo($_mail, "mail niet gekend");
      // opnieuw login scherm aanbieden

      header("Location:../scripts/A_logon.php?msg=mail niet gekend"); 

      //beëindig script;
      exit;
    }

    while($_row = $_result -> fetch(PDO::FETCH_ASSOC)) 
    {
      $_user = $_row['d_user'];

      //***************** is het paswoord correct ? **************	
      if ($_paswoord != $_row['d_paswoord']) 
      {
        $_faultCntr = $_row['d_faultCntr'] + 1; // foutteller incrementeren

        if ($_faultCntr >= 3)
        {
          $_timeOut = time()+(60*60*3); // 3 uur
          $_msg="Gebruiker werd geblokkeerd.";
        }
        else
        {
          $_timeOut = 0;
          $_pogingen = 3 - $_faultCntr;
          $_msg="Foutief paswoord.(nog $_pogingen pogingen)";
        }	

        $_query = "UPDATE ts_users
                  SET d_faultCntr = $_faultCntr,
                  d_timeOut = $_timeOut
                  WHERE d_user = $_user;";

        $_result = $_PDO -> query($_query);	
        logSecurityInfo($_mail,$_msg);
        // opnieuw login scherm aanbieden
        header("Location:$_srv?msg='$_msg'"); 

        //beëindig script;
        exit;

      }

      if ($_row['d_timeOut'] > time()) 
      {
        // timeout nog niet afgelopen -_> verleng time-out      
        $_timeOut = time()+(60*60*3);

        $_query ="UPDATE ts_users
								  SET d_timeOut = '$_timeOut'
								  WHERE d_user = $_user;";

        $_result = $_PDO -> query($_query);	
        $_msg="Gebruiker werd geblokkeerd.";
        header("Location:$_srv?msg='$_msg'"); 

        //beëindig script;
        exit;
      } 


      $_SESSION['user_id'] = $_row['d_user'];
      $_SESSION['rol'] = $_row['d_rol'];
      $_SESSION['mail'] = $_row['d_mail'];	

      $_SESSION['gender'] = $_row['d_gender'];
      $_SESSION['country'] = $_row['d_country'];
      $_SESSION['lastName'] = $_row['d_lastName'];
      $_SESSION['firstName'] = $_row['d_firstName'];
      $_SESSION['username'] = $_row['d_username'];
      $_SESSION['profilePic'] = $_row['d_profilePic'];

      $_SESSION['authenticated'] = TRUE;
    }
    
    $_identifier = "";
    $_token = ""; 
    $_expire = 0;
    $_action = "Ingelogd";

    $_query="UPDATE ts_users
								SET d_faultCntr = '0',
										d_timeOut = '0',
                    d_token = '$_token',
                    d_identifier = '$_identifier',
                    d_expire= '$_expire'
								WHERE d_user = '$_user';";

    $_result = $_PDO -> query($_query);
    // session variables met authentication en authorisation informatie

    logSecurityInfo($_mail,$_action);

    // Alles OK --> ga verder
    header('Location:../scripts/A_home.php');	

    //beëindig script;
    exit;
  }
}

catch (Exception $_e)
{
  // exception handling funtions 
  include("../php_lib/myExceptionHandling.inc.php"); 
  echo myExceptionHandling($_e,"../logs/error_log.csv");
}
?>
