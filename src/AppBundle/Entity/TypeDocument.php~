<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDocument
 *
 * @ORM\Table(name="type_document")
 * @ORM\Entity
 */
class TypeDocument
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
     * @ORM\Column(name="id_type_document", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeDocument;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeDocument
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
     * Get idTypeDocument
     *
     * @return integer
     */
    public function getIdTypeDocument()
    {
        return $this->idTypeDocument;
    }
}
