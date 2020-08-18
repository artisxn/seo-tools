<?php

namespace codicastudio\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * JsonLd is a facade for the `JsonLd` implementation access.
 *
 * @see \codicastudio\SEOTools\Contracts\JsonLd
 * @method static string generate(bool $minify = false)
 * @method static bool isEmpty()
 * @method static \codicastudio\SEOTools\Contracts\JsonLd addValue(string $key, array|string $value)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setType(string $type)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setName(string $name)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setTitle(string $title)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setSite(string $site)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setDescription(string $description)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setUrl(string $url)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd addImage(array|string $image)
 * @method static \codicastudio\SEOTools\Contracts\JsonLd setImages(array $images)
 */
class JsonLd extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.json-ld';
    }
}
