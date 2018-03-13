<?php
require "./php/connection.php";
    session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Notre Dame Aux Neiges</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./assets/css/main.css" />

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<h1><a href="./main_user_page.php">Notre Dame aux Neiges</a></h1>
						<nav class="links">
                            <ul>
                                <!--<li><a href="./Entertainment.php">Entertainment</a></li>-->
                                <!--<li><a href="./Family.php">Family</a></li>-->
                                <!--<li><a href="./Education.php">Education</a></li>-->
                                <!--<li><a href="./Sport.php">Sport</a></li>-->
                                <!--<li><a href="./Others.php">Others</a></li>-->
                     <?php
              $req=$con->query('SELECT * FROM categories');
              foreach ($req as $cat) {
              echo "<li><a href='./".$cat['name_categories'].".php'>".$cat['name_categories']."</a></li>";
               }
             ?>
        
                                <?php
              if (isset($_SESSION['id_user']) AND isset($_SESSION['nickname']))
               {
                echo "<li class='greating'>Hello,  ".$_SESSION['nickname']."</li>";
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
                                    <li><a href="./php/add_blog_post.php" class="button big fit">Add New Post</a></li>
                                    <li><a href="./php/show_post.php" class="button big fit">Edit Your Posts</a></li>
                                    <?php
                                      $req=$con->query('SELECT id_user FROM user WHERE id_user=14');
                                   $user=$req->fetch();
              if ($_SESSION['id_user'] == $user['id_user'])
             {
                echo "<li><a href='./php/add_categories.php' class='button big fit'>Modify categories</a></li>";
              }
               ?>
                                      
									<li><a href="./php/log_out.php" class="button big fit">Log Out</a></li>
                                    
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							
							<?php include("./includes/articles.php"); ?>

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>
				

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="./images/logo.jpg" alt="" /></a>
								<header>
									<h2>Comité de quartier Notre Dame aux Neiges</h2>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">
                                    <!-- About -->
							<section class="blurb">
								<h2 id="aPropos">A propos de nous</h2>
								<p>Le Comité de Quartier a pour buts, en dehors de tout esprit de lucre, de promouvoir la qualité de vie dans le quartier, de favoriser la rencontre entre ses habitants et la convivialité en général. Le Comité est particulièrement attaché à renforcer les liens sociaux et les solidarités intergénérationnelles et inter-culturelles. Le Comité organise des fêtes de quartier, par exemple: la Fête des voisins, le Drink de nouvel an, des fêtes thématiques...</p>
								<ul class="actions">
									<li><a href="https://www.facebook.com/ComiteNotreDameauxNeiges/" class="button">En savoir plus</a></li>
								</ul>
							</section>


									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="https://www.facebook.com/events/1702129353419155/">Le Comité de quartier est membre de la Platform Pentagone</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="./images/man.svg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="./images/pic04.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">L'Echevin de l'Urbanisme n'aime que les petits arbres palissés.</a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="./images/boy.svg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="./images/pic05.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="https://www.facebook.com/events/754713258068282/">Rénovation de la place de la Liberté. </a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="./images/girl.svg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="./images/pic06.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="https://www.change.org/p/emir-kir-mohamed-azzouzi-sauvegardons-le-salon-mommen">Sauvegardons le Salon Mommen !</a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="./images/man.svg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="./images/pic07.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
							<h2 id="evenement">Evènements</h2>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="#">Drink de nouvel an</a></h3>
												<time class="published" datetime="2015-10-20">janvier 20, 2018</time>
											</header>
											<a href="#" class="image"><img src="./images/pic08.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Fête des voisins</a></h3>
												<time class="published" datetime="2015-10-15">Mai 25, 2018</time>
											</header>
											<a href="#" class="image"><img src="./images/pic09.jpg" alt="" /></a>
										</article>
									</li>
									
								</ul>
							</section>

						
						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.facebook.com/ComiteNotreDameauxNeiges/" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="./assets/js/jquery.min.js"></script>
			<script src="./assets/js/skel.min.js"></script>
			<script src="./assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="./assets/js/main.js"></script>

	</body>
</html>
