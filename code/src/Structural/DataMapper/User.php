<?php
namespace DesignPatterns\Structural\DataMapper;

class User
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        $this->email    = $email;
        $this->username = $username;
    }

    /**
     * @param array $state
     * @return User
     */
    public static function fromState(array $state): User
    {
        return new self($state['username'], $state['email']);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}
