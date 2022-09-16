<?php
try{


  //*************** initalisatie ***************  
  session_start();

  //$_SESSION["mail"]="mail";
  // instantiering van $_PDO 
  // (connectie met dbms en selectie van de datbase)
  require("../connections/pdo.inc.php");
  require("../php_lib/encrypt.php");
  require_once("../php_lib/logSecurityInfo.php");

  $_registrationErrors = [];
  $_srv = $_SERVER['PHP_SELF'];

  require_once("../php_lib/dropDown.php");

  $_gendersDropdown = dropDown($_PDO, "gendersDropdown", "t_genders", "d_gender", "d_mnemonic", 1, 1);
  $_countriesDropdown = dropDown($_PDO, "countriesDropdown", "t_countries", "d_country", "d_name", 0, 0);

  function randomPfPic() {
    // random default profile picture out of 16 colors
    $_randInt = random_int(1, 16);
    $_prefix = "../assets/img/profile_pics/default/head_";
    $_suffix = ".png";
    $_color = "";
    switch($_randInt) {

      case 1:
        $_color = "alizarin";
        break;
      case 2:
        $_color = "amethyst";
        break;
      case 3:
        $_color = "belize_hole";
        break;
      case 4:
        $_color = "carrot";
        break;
      case 5:
        $_color = "deep_blue";
        break;
      case 6:
        $_color = "emerald";
        break;
      case 7:
        $_color = "green_sea";
        break;
      case 8:
        $_color = "nephritis";
        break;
      case 9:
        $_color = "pete_river";
        break;
      case 10:
        $_color = "pomegranate";
        break;
      case 11:
        $_color = "pumpkin";
        break;
      case 12:
        $_color = "red";
        break;
      case 13:
        $_color = "sun_flower";
        break;
      case 14:
        $_color = "turqoise";
        break;
      case 15:
        $_color = "wet_asphalt";
        break;
      case 16:
        $_color = "wisteria";
        break;
    }

    return $_prefix . $_color . $_suffix;

  }


  if (!isset($_POST['submit']))
  {
    //***************** formulier (in template) **************
    // is er een boodschap meegestuurd ?
    //$_msg = (isset($_GET["msg"]))? $_GET["msg"] : " "; 
    // Smarty initialiseren
    require("../smarty/mySmarty.inc.php");

    $_msg = "";

    $_passwordsDontMatch = "";
    $_validateCharacters_firstName = "";
    $_validateCharacters_lastName = "";
    $_validateCharacters_username = "";
    $_emailUniquenessCheck = "";
    $_usernameUniquenessCheck = "";
    $_emailsDontMatch = "";
    $_passwordLength = "";
    $_phoneNrLength = "";

    $_pw_one_lowercase = "";
    $_pw_one_uppercase = "";
    $_pw_one_digit = "";
    $_pw_one_specialChar = "";
    
    $_firstName = "";
    $_lastName = "";
    $_username = "";
    $_mail = "";
    $_tel = "";
    $_birthday = "";

    $_lastNameLength = "";
    $_firstNameLength = "";
    $_usernameLength = "";
    $_emailLength = "";

    $_emailFormat = "";
    $_phoneNrFormat = "";

    //$_gendersDropdown = "";
    //$_countriesDropdown = "";

    $_smarty->assign('gendersDropdown', $_gendersDropdown );
    $_smarty->assign('countriesDropdown', $_countriesDropdown );

    $_smarty->assign('emailFormat', $_emailFormat);
    $_smarty->assign('phoneNrFormat', $_phoneNrFormat);

    $_smarty->assign('lastNameLength', $_lastNameLength);
    $_smarty->assign('firstNameLength', $_firstNameLength);
    $_smarty->assign('usernameLength', $_usernameLength);

    $_smarty->assign('birthday', $_birthday);
    $_smarty->assign('firstName', $_firstName);
    $_smarty->assign('lastName', $_lastName);
    $_smarty->assign('username', $_username);
    $_smarty->assign('mail', $_mail);
    $_smarty->assign('tel', $_tel);

    $_smarty->assign('validateCharacters_firstName', $_validateCharacters_firstName);
    $_smarty->assign('validateCharacters_lastName', $_validateCharacters_lastName);
    $_smarty->assign('validateCharacters_username', $_validateCharacters_username);

    $_smarty->assign('emailUniquenessCheck', $_emailUniquenessCheck);
    $_smarty->assign('usernameUniquenessCheck', $_usernameUniquenessCheck);

    $_smarty->assign('emailsDontMatch', $_emailsDontMatch);
    $_smarty->assign('passwordsDontMatch', $_passwordsDontMatch);

    $_smarty->assign('passwordLength', $_passwordLength);
    $_smarty->assign('phoneNrLength', $_phoneNrLength);
    $_smarty->assign('emailLength', $_emailLength);

    $_smarty->assign('pw_one_lowercase', $_pw_one_lowercase);
    $_smarty->assign('pw_one_uppercase', $_pw_one_uppercase);
    $_smarty->assign('pw_one_digit', $_pw_one_digit);
    $_smarty->assign('pw_one_specialChar', $_pw_one_specialChar);
    //$_smarty->assign('passwordLength', $_passwordLength);
    // smarty variabelen toevoegen	
    $_smarty->assign('action', $_srv);
    $_smarty->assign('msg', $_msg);
    // display it
    $_smarty->display('register.tpl');
  }
  else
  {
    /******************************
    | SERVER-SIDE FORM VALIDATION | 
    ******************************/
      // verdedigen in de diepte

        // If i want to validate my form input on the client-side first i 
        // will be forced to use AJAX to validate whether or not my username or login already exist
    
    //***************** voorbereidingen **************

    /****************
    | FROM THE FORM |
    ****************/
    
    // externe niet gecontroleerde data naar interne gecontroleerde data

      // !!ask micky's opinion on these
    // d_identifier
    $_identifier = ""; // char(64)
    // d_token
    $_token = ""; // char(64)
    // d_resetKey
    $_resetKey = ""; // char(64)

      // !! ask help with this one as well, but much later
    // d_country
    $_country = "1"; // tinyint(3)

		//$_clean = trim($_inhoud);    
		//$_clean = stripslashes($_clean); 

    // d_firstName
    $_firstName = $_POST['firstName']; // varchar(255)
    $_firstName = htmlspecialchars($_firstName); // Convert special characters to HTML entities
		$_firstName = stripslashes($_firstName); 
    $_firstName = strip_tags($_firstName); // Strip HTML and PHP tags from a string
		$_firstName = trim($_firstName);
    $_firstName = ucwords($_firstName); // Convert to titlecase
    if(!preg_match('/^[a-zA-Z\s]+$/', $_firstName)) {
      array_push($_registrationErrors, "Your first name must only consist of english characters");
    }
    if(strlen($_firstName) > 50) {
      array_push($_registrationErrors, "First name must be 50 characters or less");
    }

    // d_lastName
    $_lastName = $_POST['lastName']; // varchar(255)
    $_lastName = htmlspecialchars($_lastName); // Convert special characters to HTML entities
		$_lastName = stripslashes($_lastName); 
    $_lastName = strip_tags($_lastName); // Strip HTML and PHP tags from a string
		$_lastName = trim($_lastName);
    $_lastName = ucwords($_lastName); // Convert to titlecase
    if(!preg_match('/^[a-zA-Z\s]+$/', $_lastName)) {
      array_push($_registrationErrors, "Your last name must only consist of english characters");
    }
    if(strlen($_firstName) > 75) {
      array_push($_registrationErrors, "Last name must be 75 characters or less");
    }

    // d_username
    $_username = $_POST['username']; // varchar(255)
    $_username = htmlspecialchars($_username); // Convert special characters to HTML entities
		$_username = stripslashes($_username); 
    $_username = strip_tags($_username); // Strip HTML and PHP tags from a string
    $_username = preg_replace('/\s+/', '', $_username); // Perform a regular expression search and replace in order to remove whitespace
     // make sure username is unique
    $_checkIfUsernameAlreadyExists = $_PDO -> query("SELECT d_username FROM ts_users WHERE d_username='$_username'");
    if($_row = $_checkIfUsernameAlreadyExists -> fetch(PDO::FETCH_ASSOC)) {
      array_push($_registrationErrors, "Username already in use");
    }
    if(!preg_match('/^[a-zA-Z0-9_-]+$/', $_username)) {
      array_push($_registrationErrors, "Your username must only consist of english characters, numbers, underscores and dashes");
    }
    if(strlen($_firstName) > 30) {
      array_push($_registrationErrors, "Username must be 30 characters or less");
    }

    // d_mail & conf
    $_mail = $_POST['mail']; // varchar(255)
    $_mail = htmlspecialchars($_mail); // Convert special characters to HTML entities
		$_mail = stripslashes($_mail); 
    $_mail = strip_tags($_mail); // Strip HTML and PHP tags from a string
    $_mail = preg_replace('/\s+/', '', $_mail); // Perform a regular expression search and replace in order to remove whitespace
      // make sure email is unique
    $_checkIfEmailAlreadyExists = $_PDO -> query("SELECT d_mail FROM ts_users WHERE d_mail='$_mail'");
    if($_row = $_checkIfEmailAlreadyExists -> fetch(PDO::FETCH_ASSOC)) {
      array_push($_registrationErrors, "Email already in use");
    }
    if(strlen($_firstName) > 320) {
      array_push($_registrationErrors, "Email must be 320 characters or less");
    }

    if(filter_var($_mail, FILTER_VALIDATE_EMAIL)) {
      $_mail = filter_var($_mail, FILTER_VALIDATE_EMAIL);
    } else {
      array_push($_registrationErrors, "Invalid email format");
    }

    if($_mail != $_mail) {
      array_push($_registrationErrors, "Emails don't match");
    }

    $_mailConf = $_POST['mailConf'];
    $_mailConf = htmlspecialchars($_mailConf); // Convert special characters to HTML entities
		$_mailConf = stripslashes($_mailConf); 
    $_mailConf = strip_tags($_mailConf); // Strip HTML and PHP tags from a string
    $_mailConf = preg_replace('/\s+/', '', $_mailConf); // Perform a regular expression search and replace in order to remove whitespace



    // d_tel
    $_tel = $_POST['tel']; // varchar(255)
    $_tel = htmlspecialchars($_tel); // Convert special characters to HTML entities
		$_tel = stripslashes($_tel); 
    $_tel= strip_tags($_tel); // Strip HTML and PHP tags from a string
    $_tel = preg_replace('/\s+/', '', $_tel); // Perform a regular expression search and replace in order to remove whitespace

    if(filter_var($_tel, FILTER_SANITIZE_NUMBER_INT)) {
      $_tel = filter_var($_tel, FILTER_SANITIZE_NUMBER_INT); // clean the variable so that only + - . and 0-9 can be in it you can:
    } else {
      array_push($_registrationErrors, "Invalid phone number format");
    }
    if(strlen($_tel) > 30) {
      array_push($_registrationErrors, "Your phone number can't consist of more than 30 characters");
    }

    // d_paswoord & conf
    $_paswoord = $_POST['paswoord']; // char(64)
    $_paswoord = htmlspecialchars($_paswoord); // Convert special characters to HTML entities
		$_paswoord = stripslashes($_paswoord); 
    $_paswoord = strip_tags($_paswoord); // Strip HTML and PHP tags from a string
    if(strlen($_paswoord) > 64 || strlen($_paswoord) < 8) {
      array_push($_registrationErrors, "Your password must be between 8 and 64 characters long");
    }
    // ^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])
    if(!preg_match('/^(?=.*[a-z])/', $_paswoord)) {
      array_push($_registrationErrors, "At least one lowercase character");
    }
    if(!preg_match('/^(?=.*[A-Z])/', $_paswoord)) {
      array_push($_registrationErrors, "At least one uppercase character");
    }
    if(!preg_match('/^(?=.*\d)/', $_paswoord)) {
      array_push($_registrationErrors, "At least one digit");
    }
    if(!preg_match('/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?])/', $_paswoord)) {
      array_push($_registrationErrors, "At least one special character");
    }

    $_paswoordConf = $_POST['paswoordConf'];
    $_paswoordConf = htmlspecialchars($_paswoordConf);
		$_paswoordConf = stripslashes($_paswoordConf); 
    $_paswoordConf = strip_tags($_paswoordConf);

    if($_paswoord != $_paswoordConf) {
      array_push($_registrationErrors, "Passwords don't match");
    }

    $_paswoord = encrypt($_paswoord,$_mail);  // encrypted paswoord salt is mail

    // d_dateOfBirth
    $_dateOfBirth = strtotime($_POST['birthday']);

    // d_profilePic
    $_profilePic = randomPfPic();


    // d_gender
    $_gender = $_POST['gendersDropdown']; // tinyint(3)
    $_country = $_POST['countriesDropdown']; // tinyint(3)

    /****************************
    | SETTING SESSION VARIABLES |
    ****************************/
    $_SESSION['firstName'] = $_firstName;
    $_SESSION['lastName'] = $_lastName;
    $_SESSION['username'] = $_username;
    $_SESSION['mail'] = $_mail;
    $_SESSION['tel'] = $_tel;
    $_SESSION['birthday'] = $_POST['birthday'];


    /***********
    | INTERNAL |
    ***********/
    $_rol = "1"; // tinyint(3)
    $_signedUpWhen = time(); // bigint(20)

    // Clean slate
    $_userBanned = "0"; // tinyint(3)
    $_resetTimer = "0"; // bigint(20)
    $_expire = "0"; // bigint(20)
    $_timeOut = "0"; // bigint(20)
    $_faultCntr = "0"; // tinyint(3)
    $_online = "0"; // no, user still has to log on after registration



    if(empty($_registrationErrors)) {
      $_query = "INSERT INTO ts_users
        (d_rol,
        d_gender,
        d_country,
        d_paswoord,
        d_lastName,
        d_firstName,
        d_username,
        d_tel,
        d_mail,
        d_identifier,
        d_token,
        d_expire,
        d_resetKey,
        d_resetTimer,
        d_faultCntr,
        d_timeOut,
        d_userBanned,
        d_signedUpWhen,
        d_dateOfBirth,
        d_profilePic,
        d_online) 
        VALUES
        ('$_rol',
        '$_gender',
        '$_country',
        '$_paswoord',
        '$_lastName',
        '$_firstName',
        '$_username',
        '$_tel',
        '$_mail',
        '$_identifier',
        '$_token',
        '$_expire',
        '$_resetKey',
        '$_resetTimer',
        '$_faultCntr',
        '$_timeOut',
        '$_userBanned',
        '$_signedUpWhen',
        '$_dateOfBirth',
        '$_profilePic',
        '$_online');";

        /*
        $_SESSION['firstName'] = "";
        $_SESSION['lastName'] = "";
        $_SESSION['username'] = "";
        $_SESSION['mail'] = "";
        $_SESSION['tel'] = "";
        $_SESSION['birthday'] = "";
        */

        array_push($_errorArray, "Success!");
        $_PDO->query($_query);
        header("Location: A_logon.php");
        //echo $_query;
    } else {
      //$_msg = (isset($_GET["msg"]))? $_GET["msg"] : " "; 
      // Smarty initialiseren
      require("../smarty/mySmarty.inc.php");


      $_msg = (in_array("Success!", $_registrationErrors)) ? "Success!" : "";

      $_firstName = (isset($_SESSION['firstName'])) ? $_SESSION['firstName'] : "";
      $_lastName = (isset($_SESSION['lastName'])) ? $_SESSION['lastName'] : "";
      $_username = (isset($_SESSION['username'])) ? $_SESSION['username'] : "";
      $_mail = (isset($_SESSION['mail'])) ? $_SESSION['mail'] : "";
      $_tel = (isset($_SESSION['tel'])) ? $_SESSION['tel'] : "";
      $_birthday = (isset($_SESSION['birthday'])) ? $_SESSION['birthday'] : "";

      $_passwordsDontMatch = (in_array("Passwords don't match", $_registrationErrors)) ? "Passwords don't match" : "";
      $_emailUniquenessCheck = (in_array("Email already in use", $_registrationErrors)) ? "Email already in use" : "";
      $_usernameUniquenessCheck = (in_array("Username already in use", $_registrationErrors)) ? "Username already in use" : "";
      $_emailsDontMatch = (in_array("Emails don't match", $_registrationErrors)) ? "Emails don't match" : "";
      //$_passwordLength = (in_array("Your password must be between 5 and 64 characters long", $_registrationErrors)) ? "Your password must be between 5 and 64 characters long" : "";
      $_validateCharacters_firstName = (in_array("Your first name must only consist of english characters", $_registrationErrors)) ? "Your first name must only consist of english characters" : "";
      $_validateCharacters_lastName = (in_array("Your last name must only consist of english characters", $_registrationErrors)) ? "Your last name must only consist of english characters" : "";
      $_validateCharacters_username = (in_array("Your username must only consist of english characters, numbers, underscores and dashes", $_registrationErrors)) ? "Your username must only consist of english characters, numbers, underscores and dashes" : "";
      $_phoneNrLength = (in_array("Your phone number can't consist of more than 30 characters", $_registrationErrors)) ? "Your phone number can't consist of more than 30 characters" : "";

      $_passwordLength = (in_array("Your password must be between 8 and 64 characters long", $_registrationErrors)) ? "Your password must be between 8 and 64 characters long" : "";
      $_pw_one_lowercase = (in_array("At least one lowercase character", $_registrationErrors)) ? "At least one lowercase character" : "";
      $_pw_one_uppercase = (in_array("At least one uppercase character", $_registrationErrors)) ? "At least one uppercase character" : "";
      $_pw_one_digit = (in_array("At least one digit", $_registrationErrors)) ? "At least one digit" : "";
      $_pw_one_specialChar = (in_array("At least one special character", $_registrationErrors)) ? "At least one special character" : "";

      $_lastNameLength  = (in_array("Last name must be 75 characters or less", $_registrationErrors)) ? "Last name must be 75 characters or less" : "";
      $_firstNameLength = (in_array("First name must be 50 characters or less", $_registrationErrors)) ? "First name must be 50 characters or less" : "";
      $_usernameLength = (in_array("Username must be 30 characters or less", $_registrationErrors)) ? "Username must be 30 characters or less" : "";
      $_emailLength = (in_array("Email must be 320 characters or less", $_registrationErrors)) ? "Email must be 320 characters or less" : "";

      $_phoneNrFormat = (in_array("Invalid phone number format", $_registrationErrors)) ? "Invalid phone number format" : "";
      $_emailFormat  = (in_array("Invalid email format", $_registrationErrors)) ? "Invalid email format" : "";

      //$_gendersDropdown = "";
      //$_countriesDropdown = "";

      $_smarty->assign('gendersDropdown', $_gendersDropdown);
      $_smarty->assign('countriesDropdown', $_countriesDropdown);

      $_smarty->assign('emailFormat', $_emailFormat);
      $_smarty->assign('phoneNrFormat', $_phoneNrFormat);

      $_smarty->assign('lastNameLength', $_lastNameLength);
      $_smarty->assign('firstNameLength', $_firstNameLength);
      $_smarty->assign('usernameLength', $_usernameLength);
      $_smarty->assign('emailLength', $_emailLength);

      $_smarty->assign('birthday', $_birthday);
      $_smarty->assign('firstName', $_firstName);
      $_smarty->assign('lastName', $_lastName);
      $_smarty->assign('username', $_username);
      $_smarty->assign('mail', $_mail);
      $_smarty->assign('tel', $_tel);

      $_smarty->assign('validateCharacters_firstName', $_validateCharacters_firstName);
      $_smarty->assign('validateCharacters_lastName', $_validateCharacters_lastName);
      $_smarty->assign('validateCharacters_username', $_validateCharacters_username);

      $_smarty->assign('emailUniquenessCheck', $_emailUniquenessCheck);
      $_smarty->assign('usernameUniquenessCheck', $_usernameUniquenessCheck);

      $_smarty->assign('passwordsDontMatch', $_passwordsDontMatch);
      $_smarty->assign('emailsDontMatch', $_emailsDontMatch);

      $_smarty->assign('passwordLength', $_passwordLength);
      $_smarty->assign('phoneNrLength', $_phoneNrLength);

      $_smarty->assign('pw_one_lowercase', $_pw_one_lowercase);
      $_smarty->assign('pw_one_uppercase', $_pw_one_uppercase);
      $_smarty->assign('pw_one_digit', $_pw_one_digit);
      $_smarty->assign('pw_one_specialChar', $_pw_one_specialChar);

      // smarty variabelen toevoegen	
      $_smarty->assign('action', $_srv);
      $_smarty->assign('msg', $_msg);
      // display it
      $_smarty->display('register.tpl');
    }
  }
}

catch (Exception $_e)
{
  // exception handling funtions 
  include("../php_lib/myExceptionHandling.inc.php"); 
  echo myExceptionHandling($_e,"../logs/error_log.csv");
}
?>
