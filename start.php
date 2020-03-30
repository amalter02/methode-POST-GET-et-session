<?php
session_start();
echo "exercice de comprehension des sessions";

if(isset($_SESSION['Nom'])){
 echo " le nom de votre session vaut : ".$_SESSION['Nom'];
 echo " Supprimer vos cookies pour vider votre sessions";
}else{
 //je met une variable aléatoire dans une variable de sessions Variable1
 echo " c'est votre première visite vous n'avez pas de variable de session";
 $_SESSION['Nom']="malter ";

}
?>
