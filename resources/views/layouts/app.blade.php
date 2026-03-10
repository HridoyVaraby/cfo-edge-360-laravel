<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    @include('partials.seo', [
        'title' => View::hasSection('title') ? View::getSection('title') : 'CFO Edge 360 - Expert Financial Consulting & CFO Services',
        'description' => View::hasSection('meta_description') ? View::getSection('meta_description') : 'Expert financial consulting and CFO services to help businesses optimize their financial performance and strategic planning.',
        'keywords' => View::hasSection('meta_keywords') ? View::getSection('meta_keywords') : 'CFO services, financial consulting, business finance, financial strategy, cash flow management, financial planning',
        'image' => View::hasSection('meta_image') ? View::getSection('meta_image') : asset('banner.webp'),
        'type' => View::hasSection('meta_type') ? View::getSection('meta_type') : 'website',
        'published_time' => View::hasSection('published_time') ? View::getSection('published_time') : null,
        'modified_time' => View::hasSection('modified_time') ? View::getSection('modified_time') : null,
        'author' => View::hasSection('meta_author') ? View::getSection('meta_author') : null,
    ])

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="min-h-screen flex flex-col antialiased">

    @include('partials.header')
 
    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') { lucide.createIcons(); }
        });
    </script>

    @stack('scripts')
</body>
</html>
