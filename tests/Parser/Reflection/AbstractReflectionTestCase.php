<?php declare(strict_types=1);

namespace ApiGen\Parser\Tests\Reflection;

use ApiGen\Contracts\Parser\Broker\BackendInterface;
use ApiGen\Parser\Broker\Backend;
use ApiGen\Tests\AbstractContainerAwareTestCase;
use TokenReflection\Broker;

abstract class AbstractReflectionTestCase extends AbstractContainerAwareTestCase
{
    /**
     * @var Broker
     */
    protected $broker;

    /**
     * @var BackendInterface
     */
    protected $backend;

    protected function setUp(): void
    {
        $this->backend = $this->container->getByType(Backend::class);
        $this->broker = $this->container->getByType(Broker::class);
    }
}
