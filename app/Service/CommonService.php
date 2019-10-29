<?php

declare(strict_types=1);

namespace App\Service;

use App\Service\Contract\CommonServiceInterface;
use Hyperf\Cache\Annotation\Cacheable;

/**
 * Class CommonService.
 */
class CommonService implements CommonServiceInterface
{
    /**
     * {@inheritdoc}
     * @Cacheable(prefix="banner", ttl=1800)
     */
    public function cacheTest()
    {
        
        return ['aaa'];
    }
}
