<!doctype html>
<html>

<head>
	<meta charset="UTF-8">

	<script src="../js_lib/copyright.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/signin.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Register</title>
</head>

      

<body class="text-center">
	<main class="form-signin">
		<form method="POST" action={$action}>
			<h1 class="h3 mb-3 fw-normal">Register</h1>
			<div class="mt-2">
				<div class="mb-1 regErr">{$validateCharacters_firstName}</div>
				<div class="mb-1 regErr">{$firstNameLength}</div>
				<div class="form-floating mt-2">
					<input type="text" class="form-control" id="floatingFname" name="firstName" placeholder="." value="{$firstName}" required>
					<label for="floatingFname">First Name</label>
				</div>
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr">{$validateCharacters_lastName}</div>
				<div class="mb-1 regErr">{$lastNameLength}</div>
				<div class="form-floating mt-2">
					<input type="text" class="form-control" id="floatingLname" name="lastName" placeholder="." value="{$lastName}" required>
					<label for="floatingLname">Last Name</label>
				</div>
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr">{$usernameUniquenessCheck}</div>
				<div class="mb-1 regErr">{$validateCharacters_username}</div>
				<div class="mb-1 regErr">{$usernameLength}</div>
				<div class="form-floating mt-2">
					<input type="text" class="form-control" id="floatingUsername" name="username" placeholder="." value="{$username}" required>
					<label for="floatingUsername">Username</label>
				</div>
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr">{$emailUniquenessCheck}</div>
				<div class="mb-1 regErr">{$emailsDontMatch}</div>
				<div class="mb-1 regErr">{$emailLength}</div>
				<div class="mb-1 regErr">{$emailFormat}</div>
				<div class="form-floating">
					<input type="text" class="form-control" id="floatingLogin" name="mail" placeholder="." value="{$mail}" required>
					<label for="floatingLogin">Email address</label>
				</div>
			</div>
			<div class="form-floating mt-2">
				<input type="text" class="form-control" id="floatingLoginConf" name="mailConf" placeholder="." required>
				<label for="floatingLoginConf">Confirm Email</label>
			</div>

			<div class="mt-2">
				<div class="mb-1 regErr">{$phoneNrLength}</div>
				<div class="mb-1 regErr">{$phoneNrFormat }</div>
				<div class="form-floating">
					<input type="tel" class="form-control" id="floatingTel" name="tel" placeholder="." value="{$tel}" required>
					<label for="floatingTel">Tel</label>
				</div>
			</div>
			<div class="mt-2">
				{$gendersDropdown}
			</div>
			<div class="mt-2">
				{$countriesDropdown}
			</div>
			<div class="mt-2">
				<div class="mb-1 regErr">{$passwordLength}</div>
				<div class="mb-1 regErr">{$passwordsDontMatch}</div>
				<div class="mb-1 regErr">{$pw_one_lowercase}</div>
				<div class="mb-1 regErr">{$pw_one_uppercase}</div>
				<div class="mb-1 regErr">{$pw_one_digit}</div>
				<div class="mb-1 regErr">{$pw_one_specialChar}</div>
    
				<div class="form-floating">
					<input type="password" class="form-control m-0 rounded" id="floatingPassword" name="paswoord" placeholder="." required>
					<label for="floatingPassword">Password</label>
				</div>
			</div>
			<div class="form-floating mt-2 mb-2">
				<input type="password" class="form-control m-0 rounded" id="floatingPasswordConf" name="paswoordConf" placeholder="." required>
				<label for="floatingPasswordConf">Confirm Password</label>
			</div>

			<label for="birthday" class="mt-2 mb-1">Date of birth</label>
			<input type="date" class="date form-control" id="birthday" name="birthday" value="{$birthday}" required>

			<button class="w-100 btn btn-lg btn-primary mt-3" name="submit" type="submit">Register account</button>
			<p id=msg>{$msg}</p>
		</form>

		{include file="page_parts/copyright.tpl"}
		<a href="A_logon.php">Already have an account? Log in</a>
	</main>

</body>

</html>
