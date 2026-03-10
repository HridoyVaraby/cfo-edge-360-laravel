@extends('layouts.app')

@section('title', $category->name . ' - CFO Edge 360 Blog')
@section('meta_description', $category->description ?: 'Browse articles in ' . $category->name . ' category on CFO Edge 360 blog.')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white">
        <x-page-hero :title="$category->name" :description="$category->description ?: 'Browse all articles in the ' . $category->name . ' category.'" />

        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="grid lg:grid-cols-4 gap-8">
                    <div class="lg:col-span-3">
                        @if($posts->count() > 0)
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($posts as $post)
                                    <article
                                        class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden card-hover group">
                                        @if($post->featured_image)
                                            <div class="aspect-video overflow-hidden"><img
                                                    src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            </div>
                                        @else
                                            <div
                                                class="aspect-video bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                                                <i data-lucide="file-text" class="h-12 w-12 text-amber-400"></i></div>
                                        @endif
                                        <div class="p-5">
                                            <h2
                                                class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-amber-600 transition-colors">
                                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                            @if($post->excerpt)
                                            <p class="text-sm text-gray-600 line-clamp-3 mb-4">{{ $post->excerpt }}</p>@endif
                                            <div class="flex items-center justify-between text-xs text-gray-500">
                                                <span>{{ $post->published_at?->format('M d, Y') }}</span>
                                                <a href="{{ route('posts.show', $post->slug) }}"
                                                    class="text-amber-600 font-medium hover:text-amber-700 flex items-center">Read
                                                    <i data-lucide="arrow-right" class="h-3 w-3 ml-1"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                            <div class="mt-8">{{ $posts->links() }}</div>
                        @else
                            <div class="text-center py-20"><i data-lucide="file-text"
                                    class="h-16 w-16 text-gray-300 mx-auto mb-4"></i>
                                <h3 class="text-xl font-semibold text-gray-700 mb-2">No posts in this category</h3>
                                <p class="text-gray-500">Check back later for new content.</p>
                            </div>
                        @endif
                    </div>
                    <aside class="lg:col-span-1 space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Categories</h3>
                            <ul class="space-y-2">
                                @foreach($categories as $cat)
                                    <li><a href="{{ route('posts.category', $cat->slug) }}"
                                            class="flex items-center justify-between text-sm py-1 transition-colors {{ $cat->slug === $category->slug ? 'text-amber-600 font-semibold' : 'text-gray-700 hover:text-amber-600' }}"><span>{{ $cat->name }}</span><span
                                                class="text-xs text-gray-400">({{ $cat->posts_count }})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection