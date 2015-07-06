<?php

namespace Test\NewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserHasUseraddress
 *
 * @ORM\Table(name="User_has_Useraddress")
 * @ORM\Entity
 */
class UserHasUseraddress
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Useraddress
     *
     * @ORM\ManyToOne(targetEntity="Useraddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUseraddress", referencedColumnName="id")
     * })
     */
    private $iduseraddress;



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
     * Set iduser
     *
     * @param \Test\NewBundle\Entity\User $iduser
     * @return UserHasUseraddress
     */
    public function setIduser(\Test\NewBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Test\NewBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set iduseraddress
     *
     * @param \Test\NewBundle\Entity\Useraddress $iduseraddress
     * @return UserHasUseraddress
     */
    public function setIduseraddress(\Test\NewBundle\Entity\Useraddress $iduseraddress = null)
    {
        $this->iduseraddress = $iduseraddress;
    
        return $this;
    }

    /**
     * Get iduseraddress
     *
     * @return \Test\NewBundle\Entity\Useraddress 
     */
    public function getIduseraddress()
    {
        return $this->iduseraddress;
    }
}