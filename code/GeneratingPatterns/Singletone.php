<?php
namespace GeneratingPatterns;

class Singletone
{
    /**
     * @var array
     */
    private $properties = [];

    /**
     * @var $this
     */
    private static $instance;

    private function __construct()
    {
    }

    /**
     * @return $this
     */
    public static function getInstance()
    {
        if (empty(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setProperty($key, $value)
    {
        $this->properties[$key] = $value;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getProperty($key)
    {
        return $this->properties[$key];
    }

    /**
     * @throws \RuntimeException
     */
    public function __sleep()
    {
        throw new \RuntimeException('Not expected behavior, can not create instance via serializing.');
    }

    /**
     * @throws \RuntimeException
     */
    public function __clone()
    {
        throw new \RuntimeException('Not expected behavior, can not create instance via cloning.');
    }
}
