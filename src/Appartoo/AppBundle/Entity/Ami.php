<?php

namespace Appartoo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ami
 *
 * @ORM\Table(name="ami")
 * @ORM\Entity(repositoryClass="Appartoo\AppBundle\Repository\AmiRepository")
 */
class Ami
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idCurrent", type="integer")
     */
    private $idCurrent;

    /**
     * @ORM\ManyToOne(targetEntity="Appartoo\AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $amis;


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
     * Set idCurrent
     *
     * @param integer $idCurrent
     * @return Ami
     */
    public function setIdCurrent($idCurrent)
    {
        $this->idCurrent = $idCurrent;

        return $this;
    }

    /**
     * Get idCurrent
     *
     * @return integer 
     */
    public function getIdCurrent()
    {
        return $this->idCurrent;
    }



    /**
     * Set amis
     *
     * @param \Appartoo\AppBundle\Entity\User $amis
     * @return Ami
     */
    public function setAmis(\Appartoo\AppBundle\Entity\User $amis)
    {
        $this->amis = $amis;

        return $this;
    }

    /**
     * Get amis
     *
     * @return \Appartoo\AppBundle\Entity\User 
     */
    public function getAmis()
    {
        return $this->amis;
    }
}
