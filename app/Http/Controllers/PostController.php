<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();


        return view('posts.posts', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        //Find a post by its slug and pass it to a view
        return view('posts.post', [
            'post' => $post
        ]);
    }
}
