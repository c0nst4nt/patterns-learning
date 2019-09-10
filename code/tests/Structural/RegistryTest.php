<?php

use DesignPatterns\Structural\Registry\Registry;
use DesignPatterns\Structural\Registry\Service;

class RegistryTest extends PHPUnit_Framework_TestCase
{
    private $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, $this->service);

        $this->assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(\InvalidArgumentException::class);

        Registry::set('foobar', $this->service);
    }

    /**
     * @runInSeparateProcess
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectException(\InvalidArgumentException::class);

        Registry::get(Registry::LOGGER);
    }
}
