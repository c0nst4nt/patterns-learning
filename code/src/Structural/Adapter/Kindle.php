<?php
namespace DesignPatterns\Structural\Adapter;

class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    /**
     * {@inheritdoc}
     */
    public function unlock()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
        $this->page++;
    }

    /**
     * {@inheritdoc}
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}