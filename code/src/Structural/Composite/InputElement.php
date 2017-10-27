<?php
namespace DesignPatterns\Structural\Composite;

class InputElement implements RenderableInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
        return '<input type="text" />';
    }
}
