<?php

  class user {
    public $auth;

    public function __contruct(){
      if( !$_SESSION['login'] )
        return $this->auth = false;
    }
  }

  $user = new user();
