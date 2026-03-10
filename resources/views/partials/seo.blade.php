@php
    $title = $title ?? config('app.name', 'CFO Edge 360');
    $description = $description ?? 'Expert virtual and fractional CFO services. Strategic financial planning, cash flow optimization, investor reporting, and global compliance.';
    $keywords = $keywords ?? 'CFO services, virtual CFO, fractional CFO, financial consulting, business finance, financial strategy';
    $image = $image ?? asset('banner.webp');
    $type = $type ?? 'website';
    $url = $url ?? url()->current();
    $published_time = $published_time ?? null;
    $modified_time = $modified_time ?? null;
    $author = $author ?? null;
@endphp

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
@if($keywords)
    <meta name="keywords" content="{{ $keywords }}">
@endif

<!-- Canonical -->
<link rel="canonical" href="{{ $url }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:site_name" content="{{ config('app.name', 'CFO Edge 360') }}">
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

@if($published_time)
    <meta property="article:published_time" content="{{ $published_time }}">
@endif
@if($modified_time)
    <meta property="article:modified_time" content="{{ $modified_time }}">
@endif
@if($author)
    <meta property="article:author" content="{{ $author }}">
@endif

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $url }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:description" content="{{ $description }}">
<meta property="twitter:image" content="{{ $image }}">

<!-- Default Schema (can be pushed by specific pages) -->
@stack('schema')