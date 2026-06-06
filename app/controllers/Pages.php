<?php

class Pages extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
        }
    public function index(){ 
        $data = [
            'title' => 'Welcome to LightMVC'
        ];
        $this->view('pages/index', $data);        
        }
    public function about(){
        $data = [
            'title' => 'About Us'
        ];
        $this->view('pages/about', $data);
        }
}


?>