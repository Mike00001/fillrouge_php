<?php
require "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>User's page - Edit</title>
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
							</ul>
						</nav>
				
					</header>


	<div class="container-contact100">
		<div class="wrap-contact100">
                <span class="contact100-form-title">
           Edit Your Post</span>
                <div class="wrap-input100 ">
                            <?php   
  //show selected post
                      $id = $_GET['id'];
$query = "SELECT * FROM blog WHERE id_blog=".$id;
$list=$con->prepare($query);
    $list->execute(); 
//submit changes
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image=$_FILES['image']['name'];
    
// save on local disk
$folder="../images/blog/";
$path = $folder.$image;
$target=$folder.basename($_FILES['image']['name']);
$imageFileType=pathinfo($target,PATHINFO_EXTENSION);
$allowed=array('jpeg','png','jpg', 'gif');
$ext=pathinfo($image, PATHINFO_EXTENSION);
 //test the type
if(! in_array($ext,$allowed) )
{
 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
}
else{
copy( $_FILES['image'] ['tmp_name'], $path);}
    //
    $query = "UPDATE blog SET title='" . $title . "', content='" . $content . "', image='" . $image . "'  WHERE id_blog=" .$id;

$edit_post=$con->prepare($query);
   $success=$edit_post->execute(); 
    if ($success != 0) {
          header("Location: show_post.php");
    }else{
        echo 'error in update query';
    }
}
?>
                    
    <?php
    foreach ($list as $post):
    ?>
            <form class="contact100-form validate-form"  enctype="multipart/form-data" method="post">
                <div class="wrap-input100" >
					<span class="label-input100">Title</span>
                    <textarea name="title" rows="1" cols="100"><?php echo $post['title']; ?></textarea>
                
				</div>
                <div class="wrap-input100" >
					<span class="label-input100">Content</span>
                    <textarea name="content" rows="10" cols="100"><?php echo $post['content']; ?> </textarea>
					
				</div>
                <div class="wrap-input100" >
					<span class="label-input100">Image</span>
					<input type="file" name="image">
				</div>
           <div class="container-contact100-form-btn">
               <input type="submit" name="submit" class="contact100-form-btn" value="Edit">
				</div>
            </form>
    <?php
    endforeach;
    ?>
</div>
</div>
</div>

</body>

</html>
