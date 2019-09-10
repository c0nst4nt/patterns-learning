<?php


use DesignPatterns\Structural\Proxy\BankAccountProxy;

class ProxyTest extends PHPUnit_Framework_TestCase
{
    public function testProxy()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        $this->assertSame(30, $bankAccount->getBalance());

        $bankAccount->deposit(50);

        $this->assertSame(30, $bankAccount->getBalance());
    }
}
