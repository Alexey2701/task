<?php

namespace Test\NewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Useraddress
 *
 * @ORM\Table(name="Useraddress")
 * @ORM\Entity
 */
class Useraddress
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
     * @ORM\Column(name="zip", type="string", length=45, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=45, nullable=false)
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="house", type="integer", nullable=false)
     */
    private $house;



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
     * Set zip
     *
     * @param string $zip
     * @return Useraddress
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Useraddress
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Useraddress
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set house
     *
     * @param integer $house
     * @return Useraddress
     */
    public function setHouse($house)
    {
        $this->house = $house;
    
        return $this;
    }

    /**
     * Get house
     *
     * @return integer 
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="useraddress")
     **/
    private $user;

    public function __construct() {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \Test\NewBundle\Entity\User $user
     * @return Useraddress
     */
    public function addUser(\Test\NewBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \Test\NewBundle\Entity\User $user
     */
    public function removeUser(\Test\NewBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
function __toString()
{
  return $this->getZip();
}

	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Test\NewBundle\Entity\Useraddress',
        );
    }
}
