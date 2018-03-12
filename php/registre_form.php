<!DOCTYPE html>
<html lang="en">

<head>
	<title>Form Registre</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<!--===============================================================================================-->
</head>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form enctype="multipart/form-data" class="contact100-form validate-form" action="action_registre_form.php" method="POST">
				<span class="contact100-form-title">
           Registre</span>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre nom">
					<span class="label-input100">Prenom</span>
					<input class="input100" type="text" name="prenom" placeholder="Votre Prenom">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre prenom">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" placeholder="Votre Nom">
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre pseudo">
					<span class="label-input100">Pseudo</span>
					<input class="input100" type="text" name="nickname" placeholder="Votre Pseudo">
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="">
					<span class="label-input100" >Ajouter votre Avatar</span>
					<input class="input100" onchange="readURL(this);"  type="file" name="avatar" placeholder="Avatar">
<!--to display selected image
<img id="blah" src="#" alt="your image"/>-->
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre Email (example@mail.com)">
					<span class="label-input100">Email</span>
					<input class="input100" type="email" name="email" placeholder="Votre adresse email ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre mot de passe (******)">
					<span class="label-input100">Mot de passe</span>
					<input class="input100" type="password" name="password" placeholder="Votre Mot de passe">
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Secret Question</span>
					<div>
						<input list="Secret question" name="secret_q" placeholder="Secret question">
            <datalist id="Secret question">
            <option value="What is the name of your best friend?">
            <option value="What is the name of your mother's hometown?">
		    <option value="What is the name of school you attend?">
            </datalist>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît choisissez votre répondre">
					<span class="label-input100">Secret Answer</span>
					<input class="input100" type="text" name="secret_a" placeholder="Votre répondre">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<p><span class="label-input100">Genre</span></p>
					<input type="radio" name="gender" value="H"> <span class="label-input100">Homme</span>
					<input type="radio" name="gender" value="F"> <span class="label-input100">Femme</span>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre année de naissance">
					<span class="label-input100">Année de naissance</span>
					<input class="input100" type="text" name="birthyear" placeholder="Votre année de naissance">
				</div>
			

				<div class="container-contact100-form-btn">
          <input type="submit" name="submit" value="Registre" class="contact100-form-btn">
				</div>
			</form>
		</div>
	</div>

</body>

</html>
