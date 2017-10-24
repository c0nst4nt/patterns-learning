<?php
namespace DesignPatterns\Structural\Adapter;

interface EBookInterface
{
    /**
     * @return void
     */
    public function unlock();

    /**
     * @return void
     */
    public function pressNext();

    /**
     * @return int[]
     */
    public function getPage(): array;
}