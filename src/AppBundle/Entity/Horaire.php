<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="horaire")
 * @ORM\Entity
 */
class Horaire
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
     * @ORM\Column(name="id_horaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHoraire;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Horaire
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
     * Get idHoraire
     *
     * @return integer
     */
    public function getIdHoraire()
    {
        return $this->idHoraire;
    }
}
