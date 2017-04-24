<?php

namespace vonZnotz\CacheWarmer\Test\Functional\UseCase;

use vonZnotz\CacheWarmer\App;
use PHPUnit\Framework\TestCase;

class CacheWarmupTest extends TestCase
{
    /** @var App */
    private $app;

    public function setUp()
    {
        $this->app = new App();
    }

    public function testCurlWarmerWithTYPO3PageTree()
    {
        $cacheWarmup = $this->app->getCacheWarmup();
    }
}
