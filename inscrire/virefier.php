<?php
session_start();
foreach($_POST as $key => $val){
    if($key=='inscrire') continue;
    if($key=='telephone'){
        if(!ctype_digit($val)){
            $_SESSION['error1'] = "Le numéro de téléphone n'est pas valide.";
            header('location:inscrirepage.php');
        }
    }
}
$conn=new PDO('mysql:host=localhost;dbname=ecommerce','root','');
$sql="INSERT INTO login (email,`password`,user_type)
VALUES ('".$_POST['email']."','".$_POST['password']."','Client')";
if($conn->query($sql)){
    echo "insertion valide ";
}else{
    echo "insertion non valide";
}
?>