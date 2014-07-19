<?php

namespace Happyr\Google\AnalyticsBundle\Tests\Service;

use Happyr\Google\AnalyticsBundle\Service\ClientIdProvider;

/**
 * Class ClientIdProviderTest
 *
 * @author Tobias Nyholm
 *
 */
class ClientIdProviderTest extends \PHPUnit_Framework_TestCase
{

    public function testExtractCookie()
    {
        $provider = new ProviderDummy();

        $this->assertEquals('1110480476', $provider->extractCookie('GA1.2.1110480476.1405690517'));
        $this->assertEquals('286403989', $provider->extractCookie('1.2.286403989.1366364567'));
    }
}
class ProviderDummy extends ClientIdProvider
{
    public function extractCookie($cookieValue)
    {
        return parent::extractCookie($cookieValue);
    }
}