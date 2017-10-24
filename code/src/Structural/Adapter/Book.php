<?php
namespace DesignPatterns\Structural\Adapter;

class Book implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
        $this->page++;
    }

    /**
     * {@inheritdoc}
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * {@inheritdoc}
     */
    public function getPage(): int
    {
        return $this->page;
    }
}