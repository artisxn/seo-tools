<?php

namespace codicastudio\SEOTools\Tests;

/**
 * Class SEOToolsServiceProviderTest.
 */
class SEOToolsServiceProviderTest extends BaseTest
{
    /**
     * Verify if classes are in service container.
     *
     * @dataProvider bindsListProvider
     *
     * @param string $contract
     * @param string $concreteClass
     */
    public function test_container_are_provided($contract, $concreteClass)
    {
        $this->assertInstanceOf(
            $contract,
            $this->app[$concreteClass]
        );
    }

    /**
     * @return array
     */
    public function bindsListProvider()
    {
        return [
            [
                'codicastudio\SEOTools\Contracts\MetaTags',
                'codicastudio\SEOTools\SEOMeta',
            ],
            [
                'codicastudio\SEOTools\Contracts\OpenGraph',
                'codicastudio\SEOTools\OpenGraph',
            ],
            [
                'codicastudio\SEOTools\Contracts\SEOTools',
                'codicastudio\SEOTools\SEOTools',
            ],
            [
                'codicastudio\SEOTools\Contracts\TwitterCards',
                'codicastudio\SEOTools\TwitterCards',
            ],
            [
                'codicastudio\SEOTools\Contracts\JsonLd',
                'codicastudio\SEOTools\JsonLd',
            ],
            [
                'codicastudio\SEOTools\Contracts\JsonLdMulti',
                'codicastudio\SEOTools\JsonLdMulti',
            ],
        ];
    }
}
