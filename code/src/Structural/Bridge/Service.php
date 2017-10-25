<?php
namespace DesignPatterns\Structural\Bridge;

abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $formatter;

    /**
     * @param FormatterInterface $formatter
     */
    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param FormatterInterface $formatter
     */
    public function setFormatter(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @return string
     */
    abstract public function get();
}