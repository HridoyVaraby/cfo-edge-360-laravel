@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title) . ' - CFO Edge 360')
@section('meta_description', $post->meta_description ?: $post->excerpt)

@push('head')
    @if($post->featured_image)
        <meta property="og:image" content="{{ asset('storage/' . $post->featured_image) }}">
    @endif
    <meta property="og:type" content="article">
    <meta property="article:published_time" content="{{ $post->published_at?->toIso8601String() }}">
@endpush

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white">
        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="grid lg:grid-cols-4 gap-8">
                    <!-- Main Content -->
                    <article class="lg:col-span-3">
                        <!-- Back link -->
                        <a href="{{ route('posts.index') }}"
                            class="inline-flex items-center text-sm text-gray-600 hover:text-amber-600 mb-6 transition-colors">
                            <i data-lucide="arrow-left" class="h-4 w-4 mr-2"></i> Back to Tools & Tips
                        </a>

                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                            @if($post->featured_image)
                                <div class="aspect-video overflow-hidden">
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                        class="w-full h-full object-cover">
                                </div>
                            @endif
                            <div class="p-6 sm:p-8 lg:p-12">
                                <!-- Meta -->
                                <div class="flex flex-wrap items-center gap-3 mb-6 text-sm text-gray-500">
                                    @if($post->published_at)
                                        <span class="flex items-center"><i data-lucide="calendar"
                                                class="h-4 w-4 mr-1"></i>{{ $post->published_at->format('F d, Y') }}</span>
                                    @endif
                                    @if($post->author)
                                        <span class="flex items-center"><i data-lucide="user"
                                                class="h-4 w-4 mr-1"></i>{{ $post->author->name }}</span>
                                    @endif
                                </div>

                                <!-- Categories -->
                                @if($post->categories->count() > 0)
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        @foreach($post->categories as $category)
                                            <a href="{{ route('posts.category', $category->slug) }}"
                                                class="text-xs font-medium px-3 py-1 bg-amber-100 text-amber-700 rounded-full hover:bg-amber-200 transition-colors">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                @endif

                                <h1
                                    class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 font-serif mb-8 leading-tight">
                                    {{ $post->title }}</h1>

                                <!-- Content -->
                                <div class="prose prose-lg max-w-none blog-content text-gray-700">
                                    {!! $post->content !!}
                                </div>

                                <!-- Tags -->
                                @if($post->tags->count() > 0)
                                    <div class="mt-10 pt-8 border-t border-gray-200">
                                        <h4 class="text-sm font-semibold text-gray-900 mb-3">Tags</h4>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($post->tags as $tag)
                                                <a href="{{ route('posts.tag', $tag->slug) }}"
                                                    class="text-xs px-3 py-1 bg-gray-100 text-gray-600 rounded-full hover:bg-amber-100 hover:text-amber-700 transition-colors">{{ $tag->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Related Posts -->
                        @if($relatedPosts->count() > 0)
                            <div class="mt-10">
                                <h3 class="text-xl font-bold text-gray-900 mb-6">Related Articles</h3>
                                <div class="grid sm:grid-cols-3 gap-6">
                                    @foreach($relatedPosts as $related)
                                        <article
                                            class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover group">
                                            @if($related->featured_image)
                                                <div class="aspect-video overflow-hidden">
                                                    <img src="{{ asset('storage/' . $related->featured_image) }}"
                                                        alt="{{ $related->title }}"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                                </div>
                                            @endif
                                            <div class="p-4">
                                                <h4
                                                    class="text-sm font-bold text-gray-900 line-clamp-2 group-hover:text-amber-600 transition-colors">
                                                    <a href="{{ route('posts.show', $related->slug) }}">{{ $related->title }}</a>
                                                </h4>
                                                <span
                                                    class="text-xs text-gray-500 mt-2 block">{{ $related->published_at?->format('M d, Y') }}</span>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </article>

                    <!-- Sidebar -->
                    <aside class="lg:col-span-1 space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Categories</h3>
                            @if($categories->count() > 0)
                                <ul class="space-y-2">
                                    @foreach($categories as $cat)
                                        <li><a href="{{ route('posts.category', $cat->slug) }}"
                                                class="flex items-center justify-between text-sm text-gray-700 hover:text-amber-600 transition-colors py-1">
                                                <span>{{ $cat->name }}</span><span
                                                    class="text-xs text-gray-400">({{ $cat->posts_count }})</span>
                                            </a></li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-sm text-gray-500">No categories yet.</p>
                            @endif
                        </div>
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Posts</h3>
                            @if($recentPosts->count() > 0)
                                <ul class="space-y-3">
                                    @foreach($recentPosts as $recent)
                                        <li><a href="{{ route('posts.show', $recent->slug) }}"
                                                class="block text-sm text-gray-700 hover:text-amber-600 transition-colors">{{ $recent->title }}</a>
                                            <span
                                                class="text-xs text-gray-400">{{ $recent->published_at?->format('M d, Y') }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-sm text-gray-500">No posts yet.</p>
                            @endif
                        </div>
                        <!-- CTA -->
                        <div
                            class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl border border-amber-200 p-6 text-center">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Need Financial Guidance?</h3>
                            <p class="text-sm text-gray-600 mb-4">Book a free consultation with our CFO experts.</p>
                            <a href="{{ url('/contact') }}"
                                class="inline-flex items-center px-5 py-2.5 bg-amber-500 text-white font-semibold rounded-lg hover:bg-gray-900 transition-all duration-200 text-sm">Get
                                Started</a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection