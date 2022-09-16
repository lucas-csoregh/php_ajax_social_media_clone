<?php
/*******************************************
*    output
********************************************/  
//$_smarty instantieren en initialiseren  
require_once("../smarty/mySmarty.inc.php");
//functie om tekst/html in te lezen
require_once("../php_lib/inlezen.inc.php");
// We kennen de variabelen toe


$_jsInclude = array("../ckeditor/ckeditor.js");

$_smarty->assign('friendRequests', $_friendRequests);
$_smarty->assign('nUnsolvedFriendRequests', $_nUnsolvedFriendRequests);

$_smarty->assign('rflank', $_rflank);
$_smarty->assign('lflank', $_lflank);
$_smarty->assign('postButton', $_postButton);
$_smarty->assign('postArea', $_postArea);

$_smarty->assign('profilePic', $_profilePic);
$_smarty->assign('fullName', $_fullName);
$_smarty->assign('username', $_username);
$_smarty->assign('inhoud', $_inhoud);
//$_smarty->assign('commentaar',inlezen($_commentaar));
//$_smarty->assign('menu',menu($_menu));
$_smarty->assign('jsInclude',$_jsInclude);
// display it
$_smarty->display('social.tpl');
?>