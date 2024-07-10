<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default SEO Configuration
    |--------------------------------------------------------------------------
    |
    | These values are used as the default meta tag values for your application.
    | You can override them in individual components or views as needed.
    |
    */

    // The character encoding for your web pages
    // Example: 'UTF-8'
    'charset' => 'UTF-8',

    // The viewport settings for responsive design
    // Example: 'width=device-width, initial-scale=1.0'
    'viewport' => 'width=device-width, initial-scale=1.0',

    // The theme color for browsers on mobile devices
    // Example: '#ffffff' (white)
    'theme_color' => null,

    // Favicon configuration
    'favicon' => [
        // The path to your favicon
        // Example: 'path' => 'assets/icons/favicon.ico'
        'path' => '',
        // The size of your favicon
        // Example: '32x32'
        'size' => '32x32'
    ],

    // Title configuration
    'title' => [
        // A prefix added before the main title
        // Example: 'prefix' => 'BuzzLightyear'
        'prefix' => '',
        // Separator between prefix and main title
        // Example: 'prefix_separator' => ' | '
        'prefix_separator' => '',

        // Separator between main title and suffix
        // Example: 'suffix_separator' => ' - '
        'suffix_separator' => '',
        // A suffix added after the main title
        // Example: 'suffix' => 'To Infinity and Beyond'
        'suffix' => ''
    ],

    // A brief description of your page. Crawlers might use this to display results
    // Example: 'description' => 'BuzzLightyear offers the best space adventures and galactic defense solutions.'
    'description' => null,

    // Some keywords, that help indexing your pages
    // Example: 'keywords' => 'space, adventure, galactic, BuzzLightyear'
    'keywords' => null,

    // Tells crawlers how to handle the results (e.g., 'all', 'none', 'noindex', 'nofollow')
    // Example: 'robots' => 'all'
    'robots' => 'all',

    // Who created the page
    // Example: 'author' => 'BuzzLightyear Team'
    'author' => null,

    // Who is the copyright holder of the page
    // Example: 'copyright' => 2024, BuzzLightyear'
    'copyright' => null,

    // The canonical URL of the page to avoid duplicate content issues
    // Example: 'canonical' => 'https://www.buzzlightyear.com/your-page'
    'canonical' => null,

    // URL of the previous page in a paginated series
    // Example: 'prev' => 'https://www.buzzlightyear.com/page-1'
    'prev' => null,

    // URL of the next page in a paginated series
    // Example: 'next' => 'https://www.buzzlightyear.com/page-3'
    'next' => null,

    // Enable or disable Open Graph meta tags
    // Example: 'og-active' => true
    'og-active' => true,

    // Open Graph meta tags configuration
    'og' => [
        // The type of content (e.g., 'website', 'article')
        // Example: 'type' => 'website'
        'type' => 'website',
        // The URL of an image that represents the content
        // Example: 'image' => 'https://www.buzzlightyear.com/images/og-image.jpg'
        'image' => null,
        // The alt text for the image
        // Example: 'image-alt' => 'An image showing BuzzLightyear in action'
        'image-alt' => null,
        // The URL of the content
        // Example: 'url' => 'https://www.buzzlightyear.com/your-page'
        'url' => '',
        // The name of the website
        // Example: 'site-name' => 'BuzzLightyear'
        'site-name' => null,
        // The locale for the content (language and regional settings)
        // Example: 'locale' => 'en_US'
        'locale' => app()->getLocale(),
    ],

    // Enable or disable Twitter Card meta tags
    // Example: 'twitter-active' => true
    'twitter-active' => true,

    // Twitter Card meta tags configuration
    'twitter' => [
        // The type of card to be displayed (e.g., 'summary', 'summary_large_image')
        // Example: 'card' => 'summary_large_image'
        'card' => null,
        // The URL of an image that represents the content
        // Example: 'image' => 'https://www.buzzlightyear.com/images/twitter-card.jpg'
        'image' => null,
        // The alt text for the image
        // Example: 'image-alt' => 'An image showing BuzzLightyear in action'
        'image-alt' => null,
        // The URL of the content
        // Example: 'url' => 'https://www.buzzlightyear.com/your-page'
        'url' => '',
        // The Twitter username of the site
        // Example: 'site' => '@buzzlightyear'
        'site' => null,
        // The Twitter username of the content creator
        // Example: 'creator' => '@buzzlightyear_team'
        'creator' => null,
    ]
];
