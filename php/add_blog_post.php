<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ajouté pub</title>
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
			<form enctype="multipart/form-data" class="contact100-form validate-form" action="action_blog.php" method="POST">
				<span class="contact100-form-title">
          Ajoutè votre publication</span>

				<div class="wrap-input100 validate-input bg1" data-validate="S'il vous plaît taper Titre de votre publication">
					<span class="label-input100">Titre</span>
					<input class="input100" type="text" name="title" placeholder="Titre de votre publication">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Categorie de votre publication</span>
					<div>
               <?php
              $req=$con->query('SELECT * FROM categories');
              foreach ($req as $cat) {
              echo "<input type='checkbox' id='cat' name='categories[]' value='".$cat['id_categories']."'>".$cat['name_categories']."<br/>";
               }
               ?>

					</div>
				</div>

        <div class="wrap-input100 validate-input bg1" data-validate="S'il vous plaît Ajouté contenu ici">
          <span class="label-input100">Ajouté contenu ici</span>
          <textarea name="content" rows="8" cols="80"></textarea>
        </div>

				<div class="wrap-input100 validate-input bg1" data-validate="">
					<span class="label-input100"> Ajouter image ici </span>
					<input class="input100" type="file" name="img" placeholder="Avatar">
				</div>

				<div class="container-contact100-form-btn">
          <input type="submit" name="submit" value="Ajouté" class="contact100-form-btn">
				</div>
			</form>
		</div>
    </div>

</body>

</html>
