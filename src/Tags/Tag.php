<?php

namespace Inodepress\Sitemap\Tags;

abstract class Tag
{
    public function getType(): string
    {
        return strtolower(class_basename(static::class));
    }
}
