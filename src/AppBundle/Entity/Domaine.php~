<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="domaine")
 * @ORM\Entity
 */
class Domaine
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
     * @ORM\Column(name="id_domaine", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomaine;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Domaine
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
     * Get idDomaine
     *
     * @return integer
     */
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }
}
