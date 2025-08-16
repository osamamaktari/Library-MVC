<?php

namespace App\Controllers;

use App\Models\Post;

class PostController{

    function index(){
        $post=new Post();

        $posts=$post->all();

        require __DIR__.'./../views/posts/index.php';
    }

    function show(){

    }

    function create(){

        require __DIR__.'./../views/posts/create.php';
    }

    function store(){
        $post =new Post();
        
        $post->create($_POST['title'],$_POST['body']);

        $this->index();
    }
}