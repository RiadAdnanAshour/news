<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('images')->latest()->paginate(9);
        $gretest_posts_views = Post::orderBy('num_of_views', 'desc')->limit(3)->get();
        $oldest_news = Post::oldest()->take(3)->get();

        $gretest_posts_comments = Post::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->take(3)
            ->get();

        $categories = Category::has('posts' , '>=' , 2)->get();
        $categories_with_posts = $categories->map(function($category){
            $category->posts = $category->posts()->limit(4)->get();
            return $category;
        });

        $read_more_posts = Post::latest()->take(5)->get();

        return view('frontend.index', compact('posts', 'gretest_posts_views', 'oldest_news', 'gretest_posts_comments', 'categories_with_posts', 'read_more_posts'));

    }
}
