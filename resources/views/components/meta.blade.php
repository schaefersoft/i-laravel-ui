<meta charset="{{config('schaefersoft-meta.charset')}}">
<meta name="viewport" content="{{config('schaefersoft-meta.viewport')}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@if($themeColor)
    <meta name="theme-color" content="{{ $themeColor }}">
@endif

<link rel="icon" href="{{config('schaefersoft-meta.favicon.path')}}" sizes="{{config('schaefersoft-meta.favicon.size')}}" type="image/png">
<link rel="apple-touch-icon" href="{{config('schaefersoft-meta.favicon.path')}}">

@if($title)
    <title>{{$title}}</title>
    @if($ogActive)
        <meta property="og:title" content="{{ $title }}">
    @endif
    @if($twitterActive)
        <meta name="twitter:title" content="{{ $title }}">
    @endif
@endif
@if($description)
    <meta name="description" content="{{ $description }}">
    @if($ogActive)
        <meta property="og:description" content="{{ $description }}">
    @endif
    @if($twitterActive)
        <meta name="twitter:description" content="{{ $description }}">
    @endif
@endif
@if($keywords)
    <meta name="keywords" content="{{ $keywords }}">
@endif
@if($robots)
    <meta name="robots" content="{{ $robots }}">
@endif
@if($author)
    <meta name="author" content="{{ $author }}">
@endif
@if($copyright)
    <meta name="copyright" content="{{ $copyright }}">
@endif
@if($canonical)
    <link rel="canonical" href="{{ $canonical }}">
@endif
@if($prev)
    <link rel="prev" href="{{ $prev }}">
@endif
@if($next)
    <link rel="next" href="{{ $next }}">
@endif
@if($ogActive)
    @if($ogType)
        <meta property="og:type" content="{{ $ogType }}">
    @endif
    @if($ogImage)
        <meta property="og:image" content="{{ $ogImage }}">
    @endif
    @if($ogImageAlt)
        <meta property="og:image:alt" content="{{ $ogImageAlt }}">
    @endif
    @if($ogUrl)
        <meta property="og:url" content="{{ $ogUrl }}">
    @endif
    @if($ogSiteName)
        <meta property="og:site_name" content="{{ $ogSiteName }}">
    @endif
    @if($ogLocale)
        <meta property="og:locale" content="{{ $ogLocale }}">
    @endif
@endif
@if($twitterActive)
    @if($twitterCard)
        <meta name="twitter:card" content="{{ $twitterCard }}">
    @endif
    @if($twitterImage)
        <meta name="twitter:image" content="{{ $twitterImage }}">
    @endif
    @if($twitterImageAlt)
        <meta name="twitter:image:alt" content="{{ $twitterImageAlt }}">
    @endif
    @if($twitterUrl)
        <meta name="twitter:url" content="{{ $twitterUrl }}">
    @endif
    @if($twitterSite)
        <meta name="twitter:site" content="{{ $twitterSite }}">
    @endif
    @if($twitterCreator)
        <meta name="twitter:creator" content="{{ $twitterCreator }}">
    @endif
@endif
{{$slot}}
