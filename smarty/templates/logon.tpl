<!doctype html>
<html>

<head>
	<meta charset="UTF-8">

  <!-- <link rel="stylesheet" href="../css/logon.css"> -->
	<script src="../js_lib/copyright.js"></script>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="../css/signin.css" rel="stylesheet">
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->

	<script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
	<link href="../bootstrap5/css/bootstrap.min.css" rel="stylesheet">
	
	<title>Logon</title>
</head>

<body class="text-center">
	<main class="form-signin">
		<form method=post action={$action}>
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
			<p id=msg>{$msg}</p>
		</form>
		{include file="page_parts/copyright.tpl"}
		<a href="A_register.php">Don't have an account yet? Register here</a>
		<a href="../scripts/P_vergeten.php">Lost your password?</a>
	</main>

</body>

</html>
