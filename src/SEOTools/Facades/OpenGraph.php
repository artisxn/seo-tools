<?php

namespace codicastudio\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * OpenGraph is a facade for the `OpenGraph` implementation access.
 *
 * @see \codicastudio\SEOTools\Contracts\OpenGraph
 *
 * @method static string generate(bool $minify = false)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph addProperty(string $key, array|string $value)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph removeProperty(string $key)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph addImage(string $url, array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph addImages(array $urls)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setTitle(string $title)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setDescription(string $description)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setUrl(string $url)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setSiteName(string $name)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setType(string|null $type = null)
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setArticle(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setProfile(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setMusicSong(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setMusicAlbum(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setMusicPlaylist(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setMusicRadioStation(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setVideoMovie(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setVideoEpisode(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setVideoOther(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setVideoTVShow(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph setBook(array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph addVideo(string|null $source = null, array $attributes = [])
 * @method static \codicastudio\SEOTools\Contracts\OpenGraph addAudio(string|null $source = null, array $attributes = [])
 */
class OpenGraph extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.opengraph';
    }
}
