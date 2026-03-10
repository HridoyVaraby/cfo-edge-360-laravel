<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Static pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/cookie-policy', [PageController::class, 'cookiePolicy'])->name('cookie-policy');
Route::get('/cancellation-refund-policy', [PageController::class, 'cancellationRefundPolicy'])->name('cancellation-refund-policy');
Route::get('/terms-conditions', [PageController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/developer-credit', [PageController::class, 'developerCredit'])->name('developer-credit');

// Contact form submission
Route::post('/contact', [ContactController::class, 'submit'])
    ->name('contact.submit')
    ->middleware('throttle:5,1');

// Blog
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/category/{slug}', [PostController::class, 'category'])->name('posts.category');
Route::get('/tag/{slug}', [PostController::class, 'tag'])->name('posts.tag');

// SEO
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [\App\Http\Controllers\SitemapController::class, 'robots'])->name('robots');
