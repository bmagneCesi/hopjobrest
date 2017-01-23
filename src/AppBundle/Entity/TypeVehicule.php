<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeVehicule
 *
 * @ORM\Table(name="type_vehicule")
 * @ORM\Entity
 */
class TypeVehicule
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
     * @ORM\Column(name="id_type_vehicule", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeVehicule;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeVehicule
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
     * Get idTypeVehicule
     *
     * @return integer
     */
    public function getIdTypeVehicule()
    {
        return $this->idTypeVehicule;
    }
}
