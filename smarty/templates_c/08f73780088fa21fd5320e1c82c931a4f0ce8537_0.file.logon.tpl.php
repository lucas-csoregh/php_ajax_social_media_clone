<?php
/* Smarty version 3.1.31, created on 2022-05-12 16:47:01
  from "C:\wamp64\www\school\webapplicaties\APP_FINAL\APP_final\smarty\templates\logon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_627d3a057c50f0_06032275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f73780088fa21fd5320e1c82c931a4f0ce8537' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\APP_FINAL\\APP_final\\smarty\\templates\\logon.tpl',
      1 => 1652354823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d3a057c50f0_06032275 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="../css/logon.css">
	<?php echo '<script'; ?>
 src="../js_lib/copyright.js"><?php echo '</script'; ?>
>
	<title>AAA</title>
</head>

<body>
	<div id="mainbox">
		<main>
			<p id=msg><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
			<form method=post action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
>
				<label>Logon-id</label>
				<input type=text name=logon>
				<label>Paswoord</label>
				<input type=password name=paswoord>
				<label>Permanent<br>(8 hours)</label>
				<input type=checkbox name=persist>
				<input type=submit name='submit' value=Verzenden class=submit>
				<div class=clearfix></div>
				<div id='vergeten'>
				<a href=../scripts/P_vergeten.php>Paswoord Vergeten?</a>
				</div>
			</form>
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
