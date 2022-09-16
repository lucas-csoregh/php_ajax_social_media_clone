<?php
/* Smarty version 3.1.31, created on 2022-05-20 13:10:03
  from "C:\wamp64\www\school\eindwerk\v2.3\smarty\templates\reset.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6287932b14e954_93047537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40783ad53504756e4aeb377c5124f811298af9cc' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\v2.3\\smarty\\templates\\reset.tpl',
      1 => 1652354823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287932b14e954_93047537 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../css/ledenadmin.css" rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 src="../js_lib/copyright.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js_lib/vergelijk.js"><?php echo '</script'; ?>
>
<title>Leden administratie</title>
</head>

<body>
<div id="mainbox">
	<header>
		<img src="../images/webontwikkeling.jpeg"  height="100%" alt="webontwikkeling"/>
		<p>Web-ontwikkeling</p>
	</header>
	
  
	<main>
			<?php echo $_smarty_tpl->tpl_vars['inhoud']->value;?>

	</main>
  
	<footer>
		<?php echo '<script'; ?>
 language="javascript">
			document.write(copyRight("webontwikkeling.info"));
		<?php echo '</script'; ?>
>
	</footer>
  
</div>

</body>
</html>
<?php }
}
