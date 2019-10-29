<?php

declare(strict_types=1);

namespace App\Listener;

use App\Service\Contract\CommonServiceInterface;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\AfterWorkerStart;

/**
 * @Listener
 */
class AfterWorkerStartListener implements ListenerInterface
{
    private $commonService;

    public function __construct(CommonServiceInterface $commonService){
        $this->commonService = $commonService;
    }

    public function listen(): array
    {
        return [
            AfterWorkerStart::class,
        ];
    }

    /**
     * @param object $event
     */
    public function process($event)
    {
    }
}
