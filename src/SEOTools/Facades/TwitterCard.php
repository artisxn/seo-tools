<?php

namespace codicastudio\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * TwitterCard is a facade for the `TwitterCards` implementation access.
 *
 * @see \codicastudio\SEOTools\Contracts\TwitterCards
 *
 * @method static string generate(bool $minify = false)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards addValue(string $key, array|string $value)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards setType(string $type)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards setTitle(string $title)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards setSite(string $site)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards setDescription(string $description)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards setUrl(string $url)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards addImage(string|array $image)
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards setImages(array $images)
 */
class TwitterCard extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.twitter';
    }
}
