<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table(name="civilite")
 * @ORM\Entity
 */
class Civilite
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
     * @ORM\Column(name="id_civilite", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCivilite;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Civilite
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
     * Get idCivilite
     *
     * @return integer
     */
    public function getIdCivilite()
    {
        return $this->idCivilite;
    }
}
