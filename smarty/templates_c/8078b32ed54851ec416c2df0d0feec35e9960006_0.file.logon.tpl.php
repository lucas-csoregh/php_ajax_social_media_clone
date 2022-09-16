<?php
/* Smarty version 3.1.31, created on 2022-06-01 18:04:28
  from "C:\wamp64\www\school\webapplicaties\eindwerk\8_social\smarty\templates\logon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6297aa2c4ba256_59491446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8078b32ed54851ec416c2df0d0feec35e9960006' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\8_social\\smarty\\templates\\logon.tpl',
      1 => 1653420636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_parts/copyright.tpl' => 1,
  ),
),false)) {
function content_6297aa2c4ba256_59491446 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">

  <!-- <link rel="stylesheet" href="../css/logon.css"> -->
	<?php echo '<script'; ?>
 src="../js_lib/copyright.js"><?php echo '</script'; ?>
>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/signin.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
	<title>Logon</title>
</head>

<body class="text-center">
	<main class="form-signin">
		<form method=post action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
>
			<h1 class="h3 mb-4 fw-normal">Sign in</h1>

			<div class="form-floating">
				<input type="text" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control mt-2 rounded" id="floatingPassword" name="paswoord" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>

			<button class="w-100 btn btn-lg btn-primary mt-2" name="submit" type="submit">Sign in</button>
			<p id=msg><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		</form>
		<?php $_smarty_tpl->_subTemplateRender("file:page_parts/copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<a href="A_register.php">Don't have an account yet? Register here</a>
		<a href="../scripts/P_vergeten.php">Lost your password?</a>
	</main>

</body>

</html>
<?php }
}
