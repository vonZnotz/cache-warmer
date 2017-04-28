<?php

namespace vonZnotz\CacheWarmer\UseCase;

use vonZnotz\CacheWarmer\Service\CacheWarmer\CacheWarmerInterface;
use vonZnotz\CacheWarmer\Service\SitemapProvider\SitemapProviderInterface;

class CacheWarmup
{
    /** @var CacheWarmerInterface */
    private $cacheWarmer;

    /** @var SitemapProviderInterface */
    private $sitemapProvider;

    /**
     * CacheWarmup constructor.
     *
     * @param CacheWarmerInterface $cacheWarmer
     * @param SitemapProviderInterface $sitemapProvider
     */
    public function __construct(CacheWarmerInterface $cacheWarmer, SitemapProviderInterface $sitemapProvider)
    {
        $this->cacheWarmer = $cacheWarmer;
        $this->sitemapProvider = $sitemapProvider;
    }

    public function run(CacheWarmupRequest $request, CacheWarmupResponse $response): CacheWarmupResponse
    {
        return $response;
    }
}