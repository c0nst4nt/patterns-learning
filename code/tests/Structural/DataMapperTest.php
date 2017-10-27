<?php

use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;

class DataMapperTest extends \PHPUnit\Framework\TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storageData = [
            1 => [
                'username' => 'Slash',
                'email'    => 'saul.hudson@email.com'
            ]
        ];
        $storage = new StorageAdapter($storageData);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}
