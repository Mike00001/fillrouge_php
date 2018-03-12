<?php
include "connection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$selectCat="SELECT * FROM categories WHERE id_categories=".$id;
$cat=$con->prepare($selectCat);
    $cat->execute(); 
//print_r($cat);

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $query = "UPDATE categories SET name_categories='" . $name . "' WHERE id_categories=".$id;

$new_name=$con->prepare($query);
   $success=$new_name->execute(); 
//print_r($new_name);
    if ($success != 0) {
        echo 'Categorie updated successfully';
        header('location:add_categories.php');
    }else{
        echo 'error in update query';
    }
}

?>

<form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Edit">
</form>
<?php 
//echo $cat['name_categories'];
//?>
