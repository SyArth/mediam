<?php


namespace App\DataTransfertObject;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Credentials
 * @package App\DataTransfertObject
 */
class Credentials
{
    /**
     * @var string|null
     * @Assert\NotBlank
     */
    private $username = null;

    /**
     * @var string|null
     * @Assert\NotBlank
     */
    private $password = null;

    /**
     * Credentials constructor.
     * @param string|null $username
     */
    public function __construct($username = null)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }


}