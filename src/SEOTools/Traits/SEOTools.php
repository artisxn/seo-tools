<?php

namespace codicastudio\SEOTools\Traits;

use codicastudio\SEOTools\Contracts\SEOFriendly;

trait SEOTools
{
    /**
     * @return \codicastudio\SEOTools\Contracts\SEOTools
     */
    protected function seo()
    {
        return app('seotools');
    }

    /**
     * @param SEOFriendly $friendly
     *
     * @return \codicastudio\SEOTools\Contracts\SEOTools
     */
    protected function loadSEO(SEOFriendly $friendly)
    {
        $SEO = $this->seo();

        $friendly->loadSEO($SEO);

        return $SEO;
    }
}
