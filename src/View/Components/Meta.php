<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{
    public function __construct(
        public string  $title,
        public ?string $description = null,
        public ?string $keywords = null,
        public ?string $robots = null,
        public ?string $author = null,
        public ?string $copyright = null,
        public ?string $canonical = null,
        public ?bool $ogActive = true,
        public ?string $ogType = null,
        public ?string $ogImage = null,
        public ?string $ogImageAlt = null,
        public ?string $ogUrl = null,
        public ?string $ogSiteName = null,
        public ?string $ogLocale = null,
        public ?bool $twitterActive = true,
        public ?string $twitterImage = null,
        public ?string $twitterImageAlt = null,
        public ?string $twitterUrl = null,
        public ?string $twitterSite = null,
        public ?string $twitterCreator = null,
        public ?string $twitterCard = null,
        public ?string $themeColor = null,
        public ?string $prev = null,
        public ?string $next = null,
    )
    {
        $defaultSeoConfig = config('schaefersoft-meta');

        $this->themeColor = $this->themeColor ?: $defaultSeoConfig['theme_color'];

        $this->title = config('schaefersoft-meta.title.prefix') . config('schaefersoft-meta.title.prefix_separator') . $this->title . config('schaefersoft-meta.title.suffix_separator') . config('schaefersoft-meta.title.suffix');

        $this->description = $this->description ?: $defaultSeoConfig['description'];
        $this->keywords = $this->keywords ?: $defaultSeoConfig['keywords'];
        $this->robots = $this->robots ?: $defaultSeoConfig['robots'];
        $this->author = $this->author ?: $defaultSeoConfig['author'];
        $this->copyright = $this->copyright ?: $defaultSeoConfig['copyright'];
        $this->canonical = $this->canonical ?: $defaultSeoConfig['canonical'];
        $this->ogActive = $this->ogActive ?: $defaultSeoConfig['og-active'];
        $this->twitterActive = $this->twitterActive ?: $defaultSeoConfig['twitter-active'];
        $this->ogType = $this->ogType ?: $defaultSeoConfig['og']['type'];
        $this->ogImage = $this->ogImage ?: $defaultSeoConfig['og']['image'];
        $this->ogImageAlt = $this->ogImageAlt ?: $defaultSeoConfig['og']['image-alt'];
        $this->ogUrl = $this->ogUrl ?: $defaultSeoConfig['og']['url'];
        $this->ogSiteName = $this->ogSiteName ?: $defaultSeoConfig['og']['site-name'];
        $this->ogLocale = $this->ogLocale ?: $defaultSeoConfig['og']['locale'];
        $this->twitterCard = $this->twitterCard ?: $defaultSeoConfig['twitter']['card'];
        $this->twitterImage = $this->twitterImage ?: $defaultSeoConfig['twitter']['image'];
        $this->twitterImageAlt = $this->twitterImageAlt ?: $defaultSeoConfig['twitter']['image-alt'];
        $this->twitterUrl = $this->twitterUrl ?: $defaultSeoConfig['twitter']['url'];
        $this->twitterSite = $this->twitterSite ?: $defaultSeoConfig['twitter']['site'];
        $this->twitterCreator = $this->twitterCreator ?: $defaultSeoConfig['twitter']['creator'];
        $this->prev = $this->prev ?: $defaultSeoConfig['prev'];
        $this->next = $this->next ?: $defaultSeoConfig['next'];
    }

    public function render(): View
    {
        return view('ui::components.meta');
    }
}
