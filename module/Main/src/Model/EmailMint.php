<?php

namespace Main\Model;

use Laminas\Hydrator\ClassMethodsHydrator as ClassMethods;
use Laminas\Hydrator\NamingStrategy\UnderscoreNamingStrategy;

class EmailMint
{
    private $id;
    private $email;
    private $wallet;
    private $created_at;
    private $updated_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): EmailMint
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): EmailMint
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param mixed $wallet
     */
    public function setWallet($wallet): EmailMint
    {
        $this->wallet = $wallet;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): EmailMint
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): EmailMint
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * EmailMint constructor.
     * @param array $input
     * @throws \Exception
     */
    public function __construct($input = [])
    {
        if (! empty($input)) {
            $this->exchangeArray($input);
        }
    }

    /**
     * @param $input
     * @throws \Exception
     */
    public function exchangeArray($input)
    {
        if (isset($input['created_at']) && ! $input['created_at'] instanceof DateTime) {
            $input['created_at'] = new \DateTime($input['created_at']);
        }

        $hydrator = new ClassMethods(false);
        $hydrator->setNamingStrategy(new UnderscoreNamingStrategy());
        $hydrator->hydrate($input, $this);
    }
}
