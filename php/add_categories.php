<?php
require "connection.php";

if (isset($_POST['add'])){
    $cat=$_POST['cat'];

$req = $con->prepare('INSERT INTO categories(id_categories, name_categories) VALUES(NULL, :name_categories)');

$req->execute(array(
	'name_categories'=> $cat
));
    if ($req!=0) {
                    header("Location: add_categories.php");
    } else { echo "no connection to DB";}
    
}

$query = "SELECT * FROM categories";
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

<table>
    <tr style="text-transform:uppercase">
       <td width="150px">  </td><td width="100px">  </td><td width="100px">  </td>
    </tr>

    <?php
    foreach ($list as $cat):
    ?>
    <tr>
        <td><?php echo $cat['name_categories']; ?></td>
        <td><a href="edit_categories.php?id=<?php echo $cat['id_categories']; ?>">Edit</a></td>
        <td><a href="add_categories.php?deleteid=<?php echo $cat['id_categories']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    ?>

</table>
				</div>            
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function() {
				$(this).on('select2:close', function(e) {
					if ($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					} else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})

	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [1500, 3900],
			connect: true,
			range: {
				'min': 1500,
				'max': 7500
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function(values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
			$('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
			$('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
		});

	</script>
	<!--===============================================================================================-->
	<script src="js/form.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');

	</script>

</body>

</html>
