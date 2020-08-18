<?php

namespace codicastudio\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * JsonLd is a facade for the `JsonLd` implementation access.
 *
 * @see \codicastudio\SEOTools\Contracts\JsonLdMulti
 * @method static string generate(bool $minify = false)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti newJsonLd()
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti isEmpty()
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti select(int $index)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti addValue(string $key, array|string $value)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setType(string $type)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setName(string $name)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setTitle(string $title)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setSite(string $site)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setDescription(string $description)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setUrl(string $url)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti addImage(array|string $image)
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti setImages(array $images)
 */
class JsonLdMulti extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.json-ld-multi';
    }
}
