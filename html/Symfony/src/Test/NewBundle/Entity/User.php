<?php

namespace Test\NewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=45, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=45, nullable=false)
     */
    private $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Useraddress", inversedBy="user")
     * @ORM\JoinTable(name="UserHasUseraddress")
     **/
    private $useraddress;

    public function __construct() {
        $this->useraddress = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add useraddress
     *
     * @param \Test\NewBundle\Entity\Useraddress $useraddress
     * @return User
     */
    public function addUseraddres(\Test\NewBundle\Entity\Useraddress $useraddress)
    {
        $this->useraddress[] = $useraddress;
    	$useraddress->addUser($this);
        return $this;
    }

    /**
     * Remove useraddress
     *
     * @param \Test\NewBundle\Entity\Useraddress $useraddress
     */
    public function removeUseraddres(\Test\NewBundle\Entity\Useraddress $useraddress)
    {
        $this->useraddress->removeElement($useraddress);
    }

    /**
     * Get useraddress
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUseraddress()
    {
        return $this->useraddress;
    }
	function __toString()
	{
  		return $this->getLastname();
	}
}
