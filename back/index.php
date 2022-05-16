<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link rel="stylesheet" href="assets/css/style-login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span></span>Connection</h2>
		<div class="form-holder">
        <form action="traitement.php" method='get'>
			<input name="nom" type="text" class="input" placeholder="Login" />
			<input name="mdp" type="password" class="input" placeholder="Mot de passe" />
		</div>
        <?php if(isset($_GET['error'])) { ?>
            <p style="color:white"> Mot de passe ou login invalide</p>
        <?php } ?>
		<button class="submit-btn">Se connecter</button>
</form>
	</div>
	
</div>
<!-- partial -->
  <script  src="assets/js/script-login.js"></script>

</body>
</html>
