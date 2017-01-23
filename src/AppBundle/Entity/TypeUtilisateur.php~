<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUtilisateur
 *
 * @ORM\Table(name="type_utilisateur")
 * @ORM\Entity
 */
class TypeUtilisateur
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
     * @ORM\Column(name="id_type_utilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeUtilisateur;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeUtilisateur
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
     * Get idTypeUtilisateur
     *
     * @return integer
     */
    public function getIdTypeUtilisateur()
    {
        return $this->idTypeUtilisateur;
    }
}
