<?php

namespace Appartoo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255, nullable=true)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255, nullable=true)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="nourriture", type="string", length=255, nullable=true)
     */
    private $nourriture;

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * @param string $famille
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
    }

    /**
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param string $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }

    /**
     * @param string $nourriture
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;
    }



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}