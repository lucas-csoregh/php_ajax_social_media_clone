<?php
/* Smarty version 3.1.31, created on 2022-05-23 05:24:55
  from "C:\wamp64\www\school\webapplicaties\eindwerk\v2.33\smarty\templates\reset.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628b1aa76e82d9_53998296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd68cd7f734f732a155bcddcc24b99ca43989e921' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\v2.33\\smarty\\templates\\reset.tpl',
      1 => 1652354823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b1aa76e82d9_53998296 (Smarty_Internal_Template $_smarty_tpl) {
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
