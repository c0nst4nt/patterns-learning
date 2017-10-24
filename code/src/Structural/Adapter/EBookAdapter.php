<?php
namespace DesignPatterns\Structural\Adapter;

class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * {@inheritdoc}
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * {@inheritdoc}
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}