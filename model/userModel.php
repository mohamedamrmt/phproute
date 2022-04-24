<?php

class userModel extends db{
    public function showUsers(){
        return $this->select("users","*")->getAll();
    }
}


