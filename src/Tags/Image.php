<?php

namespace Inodepress\Sitemap\Tags;

class Image
{
    /** @var string */
    public string $url;

    /** @var string */
    public string $caption;

    /** @var string */
    public string $geo_location;

    /** @var string */
    public string $title;

    /** @var string */
    public string $license;

    public static function create(string $url, string $caption = '', string $geo_location = '', string $title = '', string $license = ''): self
    {
        return new static($url, $caption, $geo_location, $title, $license);
    }

    public function __construct(string $url, string $caption = '', string $geo_location = '', string $title = '', string $license = '')
    {
        $this->setUrl($url);

        $this->setCaption($caption);

        $this->setGeoLocation($geo_location);

        $this->setTitle($title);

        $this->setLicense($license);
    }

    public function setUrl(string $url = '')
    {
        $this->url = $url;

        return $this;
    }

    public function setCaption(string $caption = '')
    {
        $this->caption = $caption;

        return $this;
    }

    public function setGeoLocation(string $geo_location = '')
    {
        $this->geo_location = $geo_location;

        return $this;
    }

    public function setTitle(string $title = '')
    {
        $this->title = $title;

        return $this;
    }

    public function setLicense(string $license = '')
    {
        $this->license = $license;

        return $this;
    }
}