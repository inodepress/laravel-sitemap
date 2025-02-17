<?php

namespace Inodepress\Sitemap\Crawler;

use Psr\Http\Message\UriInterface;
use Inodepress\Crawler\CrawlProfiles\CrawlProfile;

class Profile extends CrawlProfile
{
    /** @var callable */
    protected $profile;

    public function shouldCrawlCallback(callable $callback)
    {
        $this->profile = $callback;
    }

    /*
     * Determine if the given url should be crawled.
     */
    public function shouldCrawl(UriInterface $url): bool
    {
        return ($this->profile)($url);
    }
}
