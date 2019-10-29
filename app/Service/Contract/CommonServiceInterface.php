<?php

declare(strict_types=1);

namespace App\Service\Contract;

use Hyperf\Contract\PaginatorInterface;

/**
 * Interface ProductServiceInterface.
 */
interface CommonServiceInterface
{
    /**
     * @return array
     */
    public function cacheTest();

}
