<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->with(['categories', 'author'])
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        $categories = Category::withCount([
            'posts' => function ($q) {
                $q->published();
            }
        ])->get();

        $recentPosts = Post::published()
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();

        return view('blog.index', compact('posts', 'categories', 'recentPosts'));
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)
            ->published()
            ->with(['categories', 'tags', 'author'])
            ->firstOrFail();

        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($q) use ($post) {
                $q->whereIn('categories.id', $post->categories->pluck('id'));
            })
            ->limit(3)
            ->get();

        $categories = Category::withCount([
            'posts' => function ($q) {
                $q->published();
            }
        ])->get();

        $recentPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts', 'categories', 'recentPosts'));
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $category->posts()
            ->published()
            ->with(['categories', 'author'])
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        $categories = Category::withCount([
            'posts' => function ($q) {
                $q->published();
            }
        ])->get();

        return view('blog.category', compact('category', 'posts', 'categories'));
    }

    public function tag(string $slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        $posts = $tag->posts()
            ->published()
            ->with(['categories', 'author'])
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        $categories = Category::withCount([
            'posts' => function ($q) {
                $q->published();
            }
        ])->get();

        return view('blog.tag', compact('tag', 'posts', 'categories'));
    }
}
