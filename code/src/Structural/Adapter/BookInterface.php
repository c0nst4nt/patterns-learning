<?php
namespace DesignPatterns\Structural\Adapter;

interface BookInterface
{
    /**
     * @return void
     */
    public function turnPage();

    /**
     * @return void
     */
    public function open();

    /**
     * @return int
     */
    public function getPage(): int;
}