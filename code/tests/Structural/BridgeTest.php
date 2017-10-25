<?php

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;

class BridgeTest extends \PHPUnit\Framework\TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World!', $service->get());

        $service->setFormatter(new HtmlFormatter());
        $this->assertEquals('<p>Hello World!</p>', $service->get());
    }
}