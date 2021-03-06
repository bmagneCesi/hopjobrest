<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DemandeService", mappedBy="activite")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="taux_horaire", type="integer")
     */
    private $tauxHoraire;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SousDomaine", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $sousDomaine;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Activite
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set tauxHoraire
     *
     * @param integer $tauxHoraire
     *
     * @return Activite
     */
    public function setTauxHoraire($tauxHoraire)
    {
        $this->tauxHoraire = $tauxHoraire;

        return $this;
    }

    /**
     * Get tauxHoraire
     *
     * @return int
     */
    public function getTauxHoraire()
    {
        return $this->tauxHoraire;
    }

    /**
     * Set sousDomaine
     *
     * @param \AppBundle\Entity\SousDomaine $sousDomaine
     *
     * @return Activite
     */
    public function setSousDomaine(\AppBundle\Entity\SousDomaine $sousDomaine)
    {
        $this->sousDomaine = $sousDomaine;

        return $this;
    }

    /**
     * Get sousDomaine
     *
     * @return \AppBundle\Entity\SousDomaine
     */
    public function getSousDomaine()
    {
        return $this->sousDomaine;
    }
}
