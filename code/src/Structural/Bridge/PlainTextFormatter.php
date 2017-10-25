<?php
namespace DesignPatterns\Structural\Bridge;

class PlainTextFormatter implements FormatterInterface
{
    /**
     * {@inheritdoc}
     */
    public function format(string $text)
    {
        return $text;
    }
}