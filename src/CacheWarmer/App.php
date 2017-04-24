<?php

namespace vonZnotz\CacheWarmer;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use vonZnotz\CacheWarmer\Config\Config;

class App
{
    use Config;

    /** @var ContainerBuilder */
    private $container;

    public function __construct()
    {
        $container = new \Symfony\Component\DependencyInjection\ContainerBuilder();
        $loader = new \Symfony\Component\DependencyInjection\Loader\YamlFileLoader($container, new \Symfony\Component\Config\FileLocator(__DIR__ . '/resources/config'));
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