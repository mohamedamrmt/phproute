<?php

include "lib/db.php";
include "model/userModel.php";
include "lib/auth.php";

auth::redirectIfNotAuth();

$users = new userModel();
$allUsers =  $users->showUsers();


include "design/allusers.desing.php";
