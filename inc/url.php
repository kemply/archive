<?php

  class url {
    private $path;

    public function get($n){
      return $this->path[$n-1];
    }

    public function server(){
      print_r($_SERVER);
    }

    public function __construct(){
      $this->path = explode('/', substr($_SERVER['REQUEST_URI'], 1));
    }
  }

  $url = new url();
