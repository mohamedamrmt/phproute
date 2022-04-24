<?php

include "lib/validation.php";

if(isset($_POST['email'])){
    $validation = new validation();
    $validation->input("email")->required()->email();
    $validation->input("password")->required()->min(7);

    if($validation->success()){

    }else{
        $validation->showErorr();
    }
}





include "design/login.design.php";