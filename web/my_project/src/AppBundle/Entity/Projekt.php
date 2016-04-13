<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projekt
 *
 * @ORM\Table(name="projekt")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjektRepository")
 */
class Projekt
{
	
	/**
	 * @ORM\ManyToOne(targetEntity="Kundenliste", inversedBy="kunden")
	 */
	private $kundenliste;
		
	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="projektname", type="string", length=255)
     */
    private $projektname;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set projektname
     *
     * @param string $projektname
     *
     * @return Projekt
     */
    public function setProjektname($projektname)
    {
        $this->projektname = $projektname;

        return $this;
    }

    /**
     * Get projektname
     *
     * @return string
     */
    public function getProjektname()
    {
        return $this->projektname;
    }

    /**
     * Set kundenliste
     *
     * @param \AppBundle\Entity\Kundenliste $kundenliste
     *
     * @return Projekt
     */
    public function setKundenliste(\AppBundle\Entity\Kundenliste $kundenliste = null)
    {
        $this->kundenliste = $kundenliste;

        return $this;
    }

    /**
     * Get kundenliste
     *
     * @return \AppBundle\Entity\Kundenliste
     */
    public function getKundenliste()
    {
        return $this->kundenliste;
    }
}
