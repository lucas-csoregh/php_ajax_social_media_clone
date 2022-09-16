<?php
/* Smarty version 3.1.31, created on 2022-05-20 13:06:47
  from "C:\wamp64\www\school\eindwerk\v0.6\smarty\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6287926727b0a1_97644994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '434ccfc71eace8db2cc409489539e71c5e90cb36' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\eindwerk\\v0.6\\smarty\\templates\\register.tpl',
      1 => 1653048014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287926727b0a1_97644994 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>AAA</title>
</head>

<body class="text-center">
	<main class="form-signin">
		<form method="POST" action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
 >
			<h1 class="h3 mb-3 fw-normal">Register</h1>

			<div class="form-floating">
				<!-- <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com"> -->
				<input type="text" class="form-control" id="floatingFname" name="logon" placeholder="name@example.com">
				<label for="floatingFname">First Name</label>
			</div>
			<div class="form-floating">
				<!-- <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com"> -->
				<input type="text" class="form-control" id="floatingLname" name="logon" placeholder="name@example.com">
				<label for="floatingLname">Last Name</label>
			</div>
			<div class="form-floating">
				<!-- <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com"> -->
				<input type="text" class="form-control" id="floatingUsername" name="logon" placeholder="name@example.com">
				<label for="floatingUsername">Username</label>
			</div>
			<div class="form-floating">
				<!-- <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com"> -->
				<input type="text" class="form-control" id="floatingLogin" name="logon" placeholder="name@example.com">
				<label for="floatingLogin">Email address</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control m-0" id="floatingPassword" name="paswoord" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control m-0" id="floatingPasswordConf" name="paswoord" placeholder="Password">
				<label for="floatingPasswordConf">Confirm Password</label>
			</div>
			<select class="form-select" aria-label="Default select example">
				<option selected>Sex</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>

			<br>
			<label for="birthday">Date of birth</label>
			<input type="date" class="date form-control" id="birthday" name="birthday">
			<br>
			<label class='text-start mb-1'>Upload profile picture</label>
			<br>
			<input type="file" class="form-control" aria-label="file example">

			<br>
			<button class="w-100 btn btn-lg btn-primary mt-2" name="submitRegistration" type="submit">Register account</button>
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
		<a href="A_logon.php">Already have an account? Log in</a>
	</main>

</body>

</html>
<?php }
}
