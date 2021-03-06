<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kundenliste
 *
 * @ORM\Table(name="kundenliste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KundenlisteRepository")
 */
class Kundenliste
{
	//neu --> @ORM\OneToMany(targetEntity="Projekt", mappedBy="kundenliste")
	/**
	 * @ORM\OneToMany(targetEntity="Kunde", mappedBy="kundenliste")
	 * @ORM\OneToMany(targetEntity="Projekt", mappedBy="kundenliste")
	 */
	private $kunden;
	
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Kundenliste
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->kunden = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add kunden
     *
     * @param \AppBundle\Entity\Kunde $kunden
     *
     * @return Kundenliste
     */
    public function addKunden(\AppBundle\Entity\Kunde $kunden)
    {
        $this->kunden[] = $kunden;

        return $this;
    }

    /**
     * Remove kunden
     *
     * @param \AppBundle\Entity\Kunde $kunden
     */
    public function removeKunden(\AppBundle\Entity\Kunde $kunden)
    {
        $this->kunden->removeElement($kunden);
    }

    /**
     * Get kunden
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKunden()
    {
        return $this->kunden;
    }
}
