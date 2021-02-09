<?php
require './classe/Utilisateur.php';
require './classe/Admin.php';

//utilisateur
$user = new Utilisateur('Deterre');
echo $user->generateCode();

//mise en page
echo "<br><br>";

//Admin
$admin = new Admin('Doe');
echo $admin->generateCode();

$admin->display();