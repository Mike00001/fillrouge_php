<?php
require "./php/connection.php";
    session_start();
?>
<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Notre Dame Aux Neiges</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="./assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">Notre Dame aux Neiges</a></h1>
						<nav class="links">
                            <ul>
                            <?php
              $req=$con->query('SELECT * FROM categories');
              foreach ($req as $cat) {
              echo "<li><a href='#".$cat['name_categories']."'>".$cat['name_categories']."</a></li>";
               }
               ?>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>
						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="./php/login_form.php" class="button big fit">Log In</a></li>
                                    <li><a href="./php/registre_form.php" class="button big fit">Registre</a></li>
								</ul>
							</section>

					</section>