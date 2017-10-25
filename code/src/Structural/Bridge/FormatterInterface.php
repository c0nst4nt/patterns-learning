<?php
namespace DesignPatterns\Structural\Bridge;

interface FormatterInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function format(string $text);
}