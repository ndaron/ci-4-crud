<?php

namespace App\Controllers;

use \App\Models\PostModel;

class Post extends BaseController
{
    public function index($page = false)
    {
        $postModel = new PostModel();

        $post = $postModel->where('status', 'publish')
            ->orderBy('published_at', 'desc')
            ->findAll();

        return view('post/index');
    }

    public function category($category = false, $page = false)
    {
        return view('post/category');
    }

    public function show($slug)
    {
        $postModel = new PostModel();

        $post = $postModel->where('status', 'publish')
            ->where('slug', $slug)
            ->first();

        return view('post/show');
    }
}
