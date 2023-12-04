<?php
namespace App\Entity;
use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @ORM\Table(name="user") 
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $userId;

    /** @ORM\Column(type="string", length="16") */
    private $userName;

    /** @ORM\Column(type="datetime") */
    private $userBirthDate;


    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of userBirthDate
     */ 
    public function getUserBirthDate()
    {
        return $this->userBirthDate;
    }

    /**
     * Set the value of userBirthDate
     *
     * @return  self
     */ 
    public function setUserBirthDate($userBirthDate)
    {
        $this->userBirthDate = $userBirthDate;

        return $this;
    }
}