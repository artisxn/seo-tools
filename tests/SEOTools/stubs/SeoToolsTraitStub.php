<?php

namespace codicastudio\SEOTools\Tests\stubs;
use codicastudio\SEOTools\Traits\SEOTools;

/**
 * Class SeoToolsTraitStub
 */
class SeoToolsTraitStub
{
    use SEOTools;

    public function makeSeoForTests()
    {
        return $this->seo();
    }
}
