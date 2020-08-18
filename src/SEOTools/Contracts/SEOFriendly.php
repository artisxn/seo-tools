<?php

namespace codicastudio\SEOTools\Contracts;

interface SEOFriendly
{
    /**
     * Performs SEO settings.
     *
     * @param SEOTools $SEOTools
     */
    public function loadSEO(SEOTools $SEOTools);
}
