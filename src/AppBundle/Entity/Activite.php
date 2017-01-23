<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="fk_activite_sous_domaine1_idx", columns={"sous_domaine_id_sous_domaine"})})
 * @ORM\Entity
 */
class Activite
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="taux_horaire", type="integer", nullable=true)
     */
    private $tauxHoraire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_activite", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivite;

    /**
     * @var \AppBundle\Entity\SousDomaine
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SousDomaine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sous_domaine_id_sous_domaine", referencedColumnName="id_sous_domaine")
     * })
     */
    private $sousDomaineSousDomaine;



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
     * @return integer
     */
    public function getTauxHoraire()
    {
        return $this->tauxHoraire;
    }

    /**
     * Get idActivite
     *
     * @return integer
     */
    public function getIdActivite()
    {
        return $this->idActivite;
    }

    /**
     * Set sousDomaineSousDomaine
     *
     * @param \AppBundle\Entity\SousDomaine $sousDomaineSousDomaine
     *
     * @return Activite
     */
    public function setSousDomaineSousDomaine(\AppBundle\Entity\SousDomaine $sousDomaineSousDomaine = null)
    {
        $this->sousDomaineSousDomaine = $sousDomaineSousDomaine;

        return $this;
    }

    /**
     * Get sousDomaineSousDomaine
     *
     * @return \AppBundle\Entity\SousDomaine
     */
    public function getSousDomaineSousDomaine()
    {
        return $this->sousDomaineSousDomaine;
    }
    /**
     * @var integer
     */
    private $domaineIdDomaine;


    /**
     * Set domaineIdDomaine
     *
     * @param integer $domaineIdDomaine
     *
     * @return Activite
     */
    public function setDomaineIdDomaine($domaineIdDomaine)
    {
        $this->domaineIdDomaine = $domaineIdDomaine;

        return $this;
    }

    /**
     * Get domaineIdDomaine
     *
     * @return integer
     */
    public function getDomaineIdDomaine()
    {
        return $this->domaineIdDomaine;
    }
}
