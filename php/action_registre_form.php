<?php // connect to the server and database
require "connection.php";
// ∕∕create variables
if(isset($_POST['submit'])) {
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$nickname= $_POST['nickname'];
$email=$_POST['email'];
$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$gender= $_POST['gender'];
$birthyear= $_POST['birthyear'];
$secret_q= $_POST['secret_q'];
$secret_a= $_POST['secret_a'];
$avatarName=$_FILES['avatar']['name'];
$folder="../images/avatar/";
$path = $folder.$avatarName;
$target=$folder.basename($_FILES['avatar']['name']);
$imageFileType=pathinfo($target,PATHINFO_EXTENSION);
$allowed=array('jpeg','png','jpg', 'gif', 'svg');
$ext=pathinfo($avatarName, PATHINFO_EXTENSION);
// test
if(! in_array($ext,$allowed) )
{
 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
}
else{
copy( $_FILES['avatar']['tmp_name'], $path);
    
    
$request=$con->prepare("INSERT INTO user (nom, prenom, nickname, email, password, gender, birthyear, secret_q, secret_a, avatar)
 VALUES ( :nom, :prenom, :nickname, :email, :password, :gender, :birthyear, :secret_q, :secret_a, :avatar)");
                 $request->bindValue(':nom', $nom);
                 $request->bindValue(':prenom', $prenom);
                 $request->bindValue(':nickname', $nickname);
                 $request->bindValue(':email', $email);
                 $request->bindValue(':password', $pass_hash);
                 $request->bindValue(':gender', $gender);
                 $request->bindValue(':birthyear', $birthyear);
                 $request->bindValue(':prenom', $prenom);
                 $request->bindValue(':secret_q', $secret_q);
                 $request->bindValue(':secret_a', $secret_a);
                 $request->bindValue(':avatar', $avatarName);
$success=$request->execute();
    
  if ($success == TRUE) {
    echo "ok";
      header('location:../main_user_page.php');

  } else { echo "<hr> There was an error - try again later";
    die();
  }
}
}

  ?>