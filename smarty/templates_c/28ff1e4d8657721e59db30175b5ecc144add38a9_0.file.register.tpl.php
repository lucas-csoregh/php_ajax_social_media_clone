<?php
/* Smarty version 3.1.31, created on 2022-05-20 20:13:58
  from "C:\wamp64\www\school\eindwerk\v2.3\smarty\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6287f68655b0c2_98741320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ff1e4d8657721e59db30175b5ecc144add38a9' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\v2.3\\smarty\\templates\\register.tpl',
      1 => 1653077636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287f68655b0c2_98741320 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>Register</title>
</head>

<body class="text-center">
	<main class="form-signin">
		<form method="POST" action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
 >
			<h1 class="h3 mb-3 fw-normal">Register</h1>

			<div class="form-floating">
				<input type="text" class="form-control" id="floatingFname" name="firstName" placeholder=".">
				<label for="floatingFname">First Name</label>
			</div>
			<div class="form-floating">
				<input type="text" class="form-control" id="floatingLname" name="lastName" placeholder=".">
				<label for="floatingLname">Last Name</label>
			</div>
			<div class="form-floating">
				<input type="text" class="form-control" id="floatingUsername" name="username" placeholder=".">
				<label for="floatingUsername">Username</label>
			</div>
			<div class="form-floating">
				<input type="text" class="form-control" id="floatingLogin" name="logon" placeholder=".">
				<label for="floatingLogin">Email address</label>
			</div>
			<div class="form-floating">
				<input type="tel" class="form-control" id="floatingTel" name="logon" placeholder=".">
				<label for="floatingTel">Tel</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control m-0" id="floatingPassword" name="paswoord" placeholder=".">
				<label for="floatingPassword">Password</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control m-0" id="floatingPasswordConf" name="paswoord-conf" placeholder=".">
				<label for="floatingPasswordConf">Confirm Password</label>
			</div>
			<select class="form-select" name="sex" aria-label="Default select example">
				<option selected>Sex</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
			</select>

			<br>
			<label for="birthday">Date of birth</label>
			<input type="date" class="date form-control" id="birthday" name="birthday">
			<br>
			<label class='text-start mb-1'>Upload profile picture</label>
			<br>
			<input type="file" class="form-control" aria-label="file example" name="profilePic">

			<br>
			<button class="w-100 btn btn-lg btn-primary mt-2" name="submit" type="submit">Register account</button>
			<p id=msg><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		</form>
		<p class="mt-2 text-muted">
			<?php echo '<script'; ?>
 language="javascript">
				document.write(copyRight("webontwikkeling.info"));
			<?php echo '</script'; ?>
>
		</p>
		<a href="A_logon.php">Already have an account? Log in</a>
	</main>

</body>

</html>
<?php }
}
