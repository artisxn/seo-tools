<?php

namespace codicastudio\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * SEOTools is a facade for the `SEOTools` implementation access.
 *
 * @see \codicastudio\SEOTools\Contracts\SEOTools
 *
 * @method static string generate(bool $minify = false)
 * @method static \codicastudio\SEOTools\Contracts\MetaTags metatags()
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph opengraph()
 * @method static \codicastudio\SEOTools\Contracts\TwitterCards twitter()
 * @method static \codicastudio\SEOTools\Contracts\JsonLd jsonLd()
 * @method static \codicastudio\SEOTools\Contracts\JsonLdMulti jsonLdMulti()
 * @method static \codicastudio\SEOTools\Contracts\SEOTools setTitle(string $title, bool $appendDefault = true)
 * @method static \codicastudio\SEOTools\Contracts\SEOTools setDescription(string $description)
 * @method static \codicastudio\SEOTools\Contracts\SEOTools setCanonical(string $url)
 * @method static \codicastudio\SEOTools\Contracts\SEOTools addImages(array $urls)
 * @method static string getTitle(bool $session = false)
 */
class SEOTools extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools';
    }
}
