<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stundeneintrag
 *
 * @ORM\Table(name="stundeneintrag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StundeneintragRepository")
 */
class Stundeneintrag
{
	
	
	/**
	 * @ORM\ManyToOne(targetEntity="Mitarbeiterliste", inversedBy="mitarbeiter")
	 */
	private $mitarbeiterliste;
	
	
	
	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime")
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="leistung", type="string", length=255)
     */
    private $leistung;

    /**
     * @var float
     *
     * @ORM\Column(name="std", type="float")
     */
    private $std;

    /**
     * @var int
     *
     * @ORM\Column(name="beitragProStd", type="integer")
     */
    private $beitragProStd;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;


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
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Stundeneintrag
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set leistung
     *
     * @param string $leistung
     *
     * @return Stundeneintrag
     */
    public function setLeistung($leistung)
    {
        $this->leistung = $leistung;

        return $this;
    }

    /**
     * Get leistung
     *
     * @return string
     */
    public function getLeistung()
    {
        return $this->leistung;
    }

    /**
     * Set std
     *
     * @param float $std
     *
     * @return Stundeneintrag
     */
    public function setStd($std)
    {
        $this->std = $std;

        return $this;
    }

    /**
     * Get std
     *
     * @return float
     */
    public function getStd()
    {
        return $this->std;
    }

    /**
     * Set beitragProStd
     *
     * @param integer $beitragProStd
     *
     * @return Stundeneintrag
     */
    public function setBeitragProStd($beitragProStd)
    {
        $this->beitragProStd = $beitragProStd;

        return $this;
    }

    /**
     * Get beitragProStd
     *
     * @return int
     */
    public function getBeitragProStd()
    {
        return $this->beitragProStd;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Stundeneintrag
     */
   
 	public function setTotal($total)
    {
        $this->total = $total;
        return $this;   
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set mitarbeiterliste
     *
     * @param \AppBundle\Entity\Mitarbeiterliste $mitarbeiterliste
     *
     * @return Stundeneintrag
     */
    public function setMitarbeiterliste(\AppBundle\Entity\Mitarbeiterliste $mitarbeiterliste = null)
    {
        $this->mitarbeiterliste = $mitarbeiterliste;

        return $this;
    }

    /**
     * Get mitarbeiterliste
     *
     * @return \AppBundle\Entity\Mitarbeiterliste
     */
    public function getMitarbeiterliste()
    {
        return $this->mitarbeiterliste;
    }

    
}
