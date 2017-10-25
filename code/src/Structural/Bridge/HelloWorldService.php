<?php
namespace DesignPatterns\Structural\Bridge;

class HelloWorldService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return $this->formatter->format('Hello World!');
    }
}