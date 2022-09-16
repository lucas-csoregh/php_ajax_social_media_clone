<?php
/* Smarty version 3.1.31, created on 2022-06-13 11:15:35
  from "C:\wamp64\www\school\webapplicaties\eindwerk\11_social\smarty\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62a71c57ef34a8_29696432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669524297aad18cd2eddfb122cc1bb2ef9ef11a5' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\webapplicaties\\eindwerk\\11_social\\smarty\\templates\\register.tpl',
      1 => 1654688394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_parts/copyright.tpl' => 1,
  ),
),false)) {
function content_62a71c57ef34a8_29696432 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">

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
			<div class="mt-2">
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['validateCharacters_firstName']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['firstNameLength']->value;?>
</div>
				<div class="form-floating mt-2">
					<input type="text" class="form-control" id="floatingFname" name="firstName" placeholder="." value="<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
" required>
					<label for="floatingFname">First Name</label>
				</div>
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['validateCharacters_lastName']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['lastNameLength']->value;?>
</div>
				<div class="form-floating mt-2">
					<input type="text" class="form-control" id="floatingLname" name="lastName" placeholder="." value="<?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
" required>
					<label for="floatingLname">Last Name</label>
				</div>
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['usernameUniquenessCheck']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['validateCharacters_username']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['usernameLength']->value;?>
</div>
				<div class="form-floating mt-2">
					<input type="text" class="form-control" id="floatingUsername" name="username" placeholder="." value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" required>
					<label for="floatingUsername">Username</label>
				</div>
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['emailUniquenessCheck']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['emailsDontMatch']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['emailLength']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['emailFormat']->value;?>
</div>
				<div class="form-floating">
					<input type="text" class="form-control" id="floatingLogin" name="mail" placeholder="." value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
" required>
					<label for="floatingLogin">Email address</label>
				</div>
			</div>
			<div class="form-floating mt-2">
				<input type="text" class="form-control" id="floatingLoginConf" name="mailConf" placeholder="." required>
				<label for="floatingLoginConf">Confirm Email</label>
			</div>

			<div class="mt-2">
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['phoneNrLength']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['phoneNrFormat']->value;?>
</div>
				<div class="form-floating">
					<input type="tel" class="form-control" id="floatingTel" name="tel" placeholder="." value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" required>
					<label for="floatingTel">Tel</label>
				</div>
			</div>
			<div class="mt-2">
				<?php echo $_smarty_tpl->tpl_vars['gendersDropdown']->value;?>

			</div>
			<div class="mt-2">
				<?php echo $_smarty_tpl->tpl_vars['countriesDropdown']->value;?>

			</div>
			<div class="mt-2">
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['passwordLength']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['passwordsDontMatch']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['pw_one_lowercase']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['pw_one_uppercase']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['pw_one_digit']->value;?>
</div>
				<div class="mb-1 regErr"><?php echo $_smarty_tpl->tpl_vars['pw_one_specialChar']->value;?>
</div>
    
				<div class="form-floating">
					<input type="password" class="form-control m-0 rounded" id="floatingPassword" name="paswoord" placeholder="." required>
					<label for="floatingPassword">Password</label>
				</div>
			</div>
			<div class="form-floating mt-2 mb-2">
				<input type="password" class="form-control m-0 rounded" id="floatingPasswordConf" name="paswoordConf" placeholder="." required>
				<label for="floatingPasswordConf">Confirm Password</label>
			</div>
			<select class="form-select" name="sex">
				<option value="1">Male</option>
				<option value="2">Female</option>
			</select>

			<label for="birthday" class="mt-2 mb-1">Date of birth</label>
			<input type="date" class="date form-control" id="birthday" name="birthday" value="<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
" required>

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
