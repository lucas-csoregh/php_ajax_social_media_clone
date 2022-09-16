<?php
/* Smarty version 3.1.31, created on 2022-05-21 19:09:08
  from "C:\wamp64\www\school\webapplicaties\eindwerk\v2.3\smarty\templates\logon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628938d493e046_45498503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ece574b67d08d82ccf4197addf1e56ef350e2c63' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\v2.3\\smarty\\templates\\logon.tpl',
      1 => 1653072226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628938d493e046_45498503 (Smarty_Internal_Template $_smarty_tpl) {
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
			<h1 class="h3 mb-3 fw-normal">Sign in</h1>

			<div class="form-floating">
				<!-- <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com"> -->
				<input type="text" class="form-control" id="floatingInput" name="logon" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control" id="floatingPassword" name="paswoord" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>

			<!--
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" name="persist" value="remember-me"> Remember me (8h)
				</label>
			</div>
			-->

			<button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign in</button>
			<p id=msg><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		</form>
		<p class="mt-5 text-muted">
			<?php echo '<script'; ?>
 language="javascript">
				document.write(copyRight("webontwikkeling.info"));
			<?php echo '</script'; ?>
>
		</p>
		<a href="A_register.php">Don't have an account yet? Register here</a>
		<a href="../scripts/P_vergeten.php">Lost your password?</a>
	</main>

	<!--
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
	-->
</body>

</html>
<?php }
}
