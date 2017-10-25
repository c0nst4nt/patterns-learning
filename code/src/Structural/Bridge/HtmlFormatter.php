<?php
namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements FormatterInterface
{
    /**
     * {@inheritdoc}
     */
    public function format(string $text)
    {
        return "<p>{$text}</p>";
    }
}