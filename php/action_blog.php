<?php
require "connection.php";
$title=$_POST['title'];
$text=$_POST['content'];
    //add images
$img=$_FILES['img']['name'];
// on local disk
$folder="../images/blog/";
$path = $folder.$img;
$target=$folder.basename($_FILES['img']['name']);
$imageFileType=pathinfo($target,PATHINFO_EXTENSION);
$allowed=array('jpeg','png','jpg', 'gif');
$ext=pathinfo($img, PATHINFO_EXTENSION);
 //workingcontrol type
if(! in_array($ext,$allowed) )
{
 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
}
else{
copy( $_FILES['img'] ['tmp_name'], $path);}
//
$categories= $_POST['categories'];
 $getUserId = $con->prepare('SELECT id_user FROM user');
 session_start();
 $user_id=$_SESSION['id_user'];


$req=$con->prepare('INSERT INTO blog(id_blog, title, user_id, content, date_updated, image) VALUES(NULL, :title, :user_id, :content, Curdate(), :image)');
$req->execute(array(
  'title'=>$title,
  'content'=>$text,
  'image'=>$img,
 'user_id'=>$user_id
));
$req->closeCursor();
    
 //add categories to match id blog and post   
$thisPostId= $con->lastInsertId();
$insertcategories = $con->prepare('INSERT INTO blog_categories(id_blog, id_categories) VALUES(:id_blog, :id_categories)');
foreach ($categories as $cat) {
    $insertcategories->execute(array(
    'id_blog'=>$thisPostId,
    'id_categories'=>$cat
    ));
}
header('location:main_user_page.php');
 ?>
