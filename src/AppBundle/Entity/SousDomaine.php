<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousDomaine
 *
 * @ORM\Table(name="sous_domaine", indexes={@ORM\Index(name="fk_sous_domaine_domaine1_idx", columns={"domaine_id_domaine"})})
 * @ORM\Entity
 */
class SousDomaine
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
     * @ORM\Column(name="domaine_id_domaine", type="integer", nullable=false)
     */
    private $domaineIdDomaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_domaine", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousDomaine;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return SousDomaine
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
     * Set domaineIdDomaine
     *
     * @param integer $domaineIdDomaine
     *
     * @return SousDomaine
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

    /**
     * Get idSousDomaine
     *
     * @return integer
     */
    public function getIdSousDomaine()
    {
        return $this->idSousDomaine;
    }
    /**
     * @var \AppBundle\Entity\Domaine
     */
    private $domaineDomaine;


    /**
     * Set domaineDomaine
     *
     * @param \AppBundle\Entity\Domaine $domaineDomaine
     *
     * @return SousDomaine
     */
    public function setDomaineDomaine(\AppBundle\Entity\Domaine $domaineDomaine = null)
    {
        $this->domaineDomaine = $domaineDomaine;

        return $this;
    }

    /**
     * Get domaineDomaine
     *
     * @return \AppBundle\Entity\Domaine
     */
    public function getDomaineDomaine()
    {
        return $this->domaineDomaine;
    }
}
