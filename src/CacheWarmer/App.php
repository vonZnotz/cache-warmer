<?php

namespace vonZnotz\CacheWarmer;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use vonZnotz\CacheWarmer\Config\Config;

class App
{
    use Config;

    /** @var ContainerBuilder */
    private $container;

    public function __construct()
    {
        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/resources/config'));
        $loader->load('services.yml');
        $this->container = $container;
    }

    public function getCacheWarmup()
    {
        return $this->container->get('cache_warmer.usecase_cache_warmup');
    }

    public static function getRootDir()
    {
        return dirname(__FILE__);
    }
}