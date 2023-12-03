<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {

    $title = '';
    if(request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' ' . $category->name;
    }

    if(request('author')) {
        $author = User::firstWhere('username', request('author'));
        $title = ' ' . $author->name;
    }


        return view('blog', [
            "title" => "Halaman Postingan" . $title,
            "active" => 'blog',
            "posts" => Post::latest()->filter(request(['search' , 'category' , 'author']))->paginate(10)->withQueryString()
            // "post" => Post::all()
        ]);
    }

    public function show(Post $post ){
        return view('post', [ 
            "title" => "Single Post",
            "active" => 'blog',
            "post" => $post
            ]);
    }
}
