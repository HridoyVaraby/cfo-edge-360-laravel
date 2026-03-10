@extends('layouts.app')

@section('title', 'Tools & Tips - CFO Edge 360 Blog')
@section('meta_description', 'Financial tools, tips, and insights from CFO Edge 360. Expert articles on financial strategy, CFO services, and business growth.')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white">
        <x-page-hero title="Tools & Tips"
            description="Financial insights, expert tips, and strategic guidance to help your business thrive in today's competitive landscape." />

        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="grid lg:grid-cols-4 gap-8">
                    <!-- Posts Grid -->
                    <div class="lg:col-span-3">
                        @if($posts->count() > 0)
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($posts as $post)
                                    <article
                                        class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden card-hover group">
                                        @if($post->featured_image)
                                            <div class="aspect-video overflow-hidden">
                                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            </div>
                                        @else
                                            <div
                                                class="aspect-video bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                                                <i data-lucide="file-text" class="h-12 w-12 text-amber-400"></i>
                                            </div>
                                        @endif
                                        <div class="p-5">
                                            @if($post->categories->count() > 0)
                                                <div class="flex flex-wrap gap-2 mb-3">
                                                    @foreach($post->categories->take(2) as $category)
                                                        <a href="{{ route('posts.category', $category->slug) }}"
                                                            class="text-xs font-medium px-2 py-1 bg-amber-100 text-amber-700 rounded-full hover:bg-amber-200 transition-colors">{{ $category->name }}</a>
                                                    @endforeach
                                                </div>
                                            @endif
                                            <h2
                                                class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-amber-600 transition-colors">
                                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                                            </h2>
                                            @if($post->excerpt)
                                                <p class="text-sm text-gray-600 line-clamp-3 mb-4">{{ $post->excerpt }}</p>
                                            @endif
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
                            <div class="text-center py-20">
                                <i data-lucide="file-text" class="h-16 w-16 text-gray-300 mx-auto mb-4"></i>
                                <h3 class="text-xl font-semibold text-gray-700 mb-2">No posts yet</h3>
                                <p class="text-gray-500">Stay tuned — new insights and articles are coming soon!</p>
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar -->
                    <aside class="lg:col-span-1 space-y-6">
                        <!-- Categories -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Categories</h3>
                            @if($categories->count() > 0)
                                <ul class="space-y-2">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('posts.category', $category->slug) }}"
                                                class="flex items-center justify-between text-sm text-gray-700 hover:text-amber-600 transition-colors py-1">
                                                <span>{{ $category->name }}</span>
                                                <span class="text-xs text-gray-400">({{ $category->posts_count }})</span>
                                            </a></li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-sm text-gray-500">No categories yet.</p>
                            @endif
                        </div>

                        <!-- Recent Posts -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Posts</h3>
                            @if($recentPosts->count() > 0)
                                <ul class="space-y-3">
                                    @foreach($recentPosts as $recent)
                                        <li><a href="{{ route('posts.show', $recent->slug) }}"
                                                class="block text-sm text-gray-700 hover:text-amber-600 transition-colors leading-relaxed">{{ $recent->title }}</a>
                                            <span
                                                class="text-xs text-gray-400">{{ $recent->published_at?->format('M d, Y') }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-sm text-gray-500">No posts yet.</p>
                            @endif
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection