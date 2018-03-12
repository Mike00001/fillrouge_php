<?php
require "connection.php";
//show posts
session_start();
//show posts
$id=$_SESSION['id_user'];
$query = "SELECT * FROM blog WHERE user_id=".$id;
$list=$con->prepare($query);
    $success=$list->execute(); 

                 
//to delete
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
        $delete="DELETE FROM blog WHERE id_blog=".$id;
        $del=$con->prepare($delete);
        $del->execute();

        if($del!=0){
            header("Location: show_post.php");
        }else{
            echo 'error in delete';
        }    
}
//    
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>User's page</title>
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
    <header id="header">
				
						<nav class="links">
                            <ul>
                            <li><a href="../main_user_page.php" class="button big fit">Back to Main Page</a></li>
                        
                                <?php
              $greeting="<p class='greating'>Hello  ".$_SESSION['nickname'].", here you can <a href='add_blog_post.php'> Add New Post? </a></p>";
if (isset($_SESSION['id_user']) AND isset($_SESSION['nickname']))
               {
               echo $greeting;
              } else { echo "Please login or registre";}
               ?>
							</ul>
						</nav>
				
					</header>


	<div class="container-contact100">
		<div class="wrap-contact100">
			
        
                <span class="contact100-form-title">
           Your Blog posts</span>
                <div class="wrap-input100 ">

      <?php              
    foreach ($list as $post):
    ?>
        <h3><?php echo $post['title']; ?> <a href="edit_post.php?id=<?php echo $post['id_blog']; ?>">Edit</a> <a href="show_post.php?deleteid=<?php echo $post['id_blog']; ?>">Delete</a></h3>
        <p><?php echo $post['content']; ?></p>
        <img style=width:100px src="../images/blog/<?php echo $post['image']; ?>"/>
                    <hr>
    <?php
    endforeach;
    ?>

				</div>            
		</div>
	</div>


</body>

</html>
