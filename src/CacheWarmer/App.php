<?php

namespace vonZnotz\CacheWarmer;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class App
{
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
        $this->container->get('cache_warmer.usecase_cache_warmup');
    }
}