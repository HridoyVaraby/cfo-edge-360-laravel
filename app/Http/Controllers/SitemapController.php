<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function sitemap(): Response
    {
        $posts = Post::published()->orderBy('updated_at', 'desc')->get();

        $staticPages = [
            'home' => 'daily',
            'services' => 'weekly',
            'contact' => 'monthly',
            'privacy-policy' => 'yearly',
            'cookie-policy' => 'yearly',
            'cancellation-refund-policy' => 'yearly',
            'terms-conditions' => 'yearly',
            'developer-credit' => 'yearly',
            'posts.index' => 'daily'
        ];

        return response()->view('seo.sitemap', [
            'posts' => $posts,
            'staticPages' => $staticPages
        ])->header('Content-Type', 'text/xml');
    }

    public function robots(): Response
    {
        return response()->view('seo.robots')->header('Content-Type', 'text/plain');
    }
}
