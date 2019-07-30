<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SharePosts',
        'description' => 'Discutons ensemble :)'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'A propos',
        'description' => 'Systeme de messagerie en PHP'
      ];

      $this->view('pages/about', $data);
    }
  }