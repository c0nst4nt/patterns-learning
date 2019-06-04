<?php

use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends \PHPUnit\Framework\TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'root', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('root:1234@localhost:3306', $connection->getDsn());
    }
}