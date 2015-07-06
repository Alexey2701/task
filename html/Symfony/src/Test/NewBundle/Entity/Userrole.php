<?php

namespace Test\NewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userrole
 *
 * @ORM\Table(name="Userrole")
 * @ORM\Entity
 */
class Userrole
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
     * @ORM\Column(name="Userrole", type="string", length=45, nullable=false)
     */
    private $userrole;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userrole
     *
     * @param string $userrole
     * @return Userrole
     */
    public function setUserrole($userrole)
    {
        $this->userrole = $userrole;
    
        return $this;
    }

    /**
     * Get userrole
     *
     * @return string 
     */
    public function getUserrole()
    {
        return $this->userrole;
    }

    /**
     * Set iduser
     *
     * @param \Test\NewBundle\Entity\User $iduser
     * @return Userrole
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
}