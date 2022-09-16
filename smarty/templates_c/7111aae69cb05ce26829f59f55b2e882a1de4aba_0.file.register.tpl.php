<?php
/* Smarty version 3.1.31, created on 2022-05-23 07:39:12
  from "C:\wamp64\www\school\webapplicaties\eindwerk\v2.33\smarty\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628b3a20d903f6_24560757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7111aae69cb05ce26829f59f55b2e882a1de4aba' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\v2.33\\smarty\\templates\\register.tpl',
      1 => 1653291549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_parts/copyright.tpl' => 1,
  ),
),false)) {
function content_628b3a20d903f6_24560757 (Smarty_Internal_Template $_smarty_tpl) {
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

			<div class="form-floating mt-2">
				<input type="text" class="form-control" id="floatingFname" name="firstName" placeholder=".">
				<label for="floatingFname">First Name</label>
			</div>
			<div class="form-floating mt-2">
				<input type="text" class="form-control" id="floatingLname" name="lastName" placeholder=".">
				<label for="floatingLname">Last Name</label>
			</div>
			<div class="form-floating mt-2">
				<input type="text" class="form-control" id="floatingUsername" name="username" placeholder=".">
				<label for="floatingUsername">Username</label>
			</div>
			<div class="form-floating mt-2">
				<input type="text" class="form-control" id="floatingLogin" name="logon" placeholder=".">
				<label for="floatingLogin">Email address</label>
			</div>
			<div class="form-floating mt-2">
				<input type="tel" class="form-control" id="floatingTel" name="tel" placeholder=".">
				<label for="floatingTel">Tel</label>
			</div>
			<div class="mt-2">
				<div class="mb-1"><?php echo $_smarty_tpl->tpl_vars['passwordsDontMatch']->value;?>
</div>
				<div class="form-floating">
					<input type="password" class="form-control m-0 rounded" id="floatingPassword" name="paswoord" placeholder=".">
					<label for="floatingPassword">Password</label>
				</div>
			</div>
			<div class="form-floating mt-2 mb-2">
				<input type="password" class="form-control m-0 rounded" id="floatingPasswordConf" name="paswoordConf" placeholder=".">
				<label for="floatingPasswordConf">Confirm Password</label>
			</div>
			<select class="form-select" name="sex">
				<option value="1">Male</option>
				<option value="2">Female</option>
			</select>

			<label for="birthday" class="mt-2">Date of birth</label>
			<input type="date" class="date form-control" id="birthday" name="birthday">
			<!--	
			<label class='text-start mb-1'>Upload profile picture</label>
			<br>
			<input type="file" class="form-control" aria-label="file example" name="profilePic">
			-->

			<button class="w-100 btn btn-lg btn-primary mt-3" name="submit" type="submit">Register account</button>
			<p id=msg><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		</form>

		<?php $_smarty_tpl->_subTemplateRender("file:page_parts/copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<a href="A_logon.php">Already have an account? Log in</a>
	</main>

</body>

</html>
<?php }
}
