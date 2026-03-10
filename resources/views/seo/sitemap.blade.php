{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($staticPages as $route => $freq)
    <url>
        <loc>{{ route($route) }}</loc>
        <changefreq>{{ $freq }}</changefreq>
        <priority>{{ $route === 'home' ? '1.0' : '0.8' }}</priority>
    </url>
@endforeach

@foreach ($posts as $post)
    <url>
        <loc>{{ route('posts.show', $post->slug) }}</loc>
        <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
@endforeach
</urlset>
