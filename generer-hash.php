<?php
// Le mot de passe que tu veux utiliser pour te connecter plus tard
$motDePasseClair = "AMDIN1"; 

// Génération du hash sécurisé (algorithme BCRYPT, la norme actuelle)
$hashSecurise = password_hash($motDePasseClair, PASSWORD_DEFAULT);

echo "Voici ton mot de passe haché à copier : <br><strong>" . $hashSecurise . "</strong>";
?>