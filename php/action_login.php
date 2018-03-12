<?php
include "connection.php";

//recognize the nickname 
$nickname=$_POST['nickname'];

$req = $con->prepare('SELECT id_user, prenom, password FROM user WHERE nickname = :nickname');
    $req->execute(array(
        'nickname' => $nickname));
    $resultat = $req->fetch();
//recognize password
 $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

    if (!$resultat) {
        echo 'Wrong password or nickname';
    }
    else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id_user'] = $resultat['id_user'];
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['nickname'] = $nickname;
            echo 'Hello '.$nickname.', You are connected!';
        }
        else {
            echo 'Wrong password or nickname';
        }
    } 

//redirect to main.php page with connection
if (isset($_SESSION['id_user']) AND isset($_SESSION['nickname']))
    {
header('location:../main_user_page.php');
    }

 ?>
