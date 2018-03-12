<?php
require "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin</title>
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
			
            <form class="contact100-form validate-form" action="add_categories.php" method="POST">
				<span class="contact100-form-title">
           Add new Category</span>

				<div class="wrap-input100" >
					<span class="label-input100">Categories</span>
					<input class="input100" type="text" name="cat" placeholder="">
				</div>

				<div class="container-contact100-form-btn">
          <input type="submit" name="add" value="Add" class="contact100-form-btn">
				</div>
                				
			</form>
                <span class="contact100-form-title">
           Edit Category</span>
                <div class="wrap-input100 ">
                            <?php
                      $id = $_GET['id'];
$query = "SELECT * FROM categories WHERE id_categories=".$id;
$list=$con->prepare($query);
    $list->execute(); 
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
        $delete="DELETE FROM categories WHERE id_categories=".$id;
      $del=$con->prepare($delete);
    $del->execute(); 

        if($del!=0){
            header("Location: add_categories.php");
        }else{
            echo 'error in delete';
        }    
}
                    

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $query = "UPDATE categories SET name_categories='" . $name . "' WHERE id_categories=".$id;

$new_name=$con->prepare($query);
   $success=$new_name->execute(); 
    if ($success != 0) {
          header("Location: add_categories.php");
    }else{
        echo 'error in update query';
    }
}
?>

<table>
    <tr style="text-transform:uppercase">
       <td width="150px"> Categorie </td><td width="200px"> Type new Name</td><td width="100px"> Delete </td>
    </tr>

    <?php
    foreach ($list as $cat):
    ?>
    <tr>
        <td><?php echo $cat['name_categories']; ?></td>
        <td><form method="post">
            <input type="text" name="name" value="<?php echo $cat['name_categories']; ?>" class="editing">
            <input type="submit" name="submit" value="Edit">
            </form></td>
        <td><a href="add_categories.php?deleteid=<?php echo $cat['id_categories']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    ?>

</table>

            </div>
		</div>
	</div>

<?php
if (isset($_POST['add'])){
    $cat=$_POST['cat'];

$req = $con->prepare('INSERT INTO categories(id_categories, name_categories) VALUES(NULL, :name_categories)');

$req->execute(array(
	'name_categories'=> $cat
));
    
}
 ?>

</body>

</html>
