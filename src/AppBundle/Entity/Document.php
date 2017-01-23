<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document", indexes={@ORM\Index(name="fk_document_type_document1_idx", columns={"type_document_id_type_document"}), @ORM\Index(name="fk_document_utilisateur1_idx", columns={"utilisateur_id_utilisateur"})})
 * @ORM\Entity
 */
class Document
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="repertoire", type="string", length=45, nullable=true)
     */
    private $repertoire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_documents", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocuments;

    /**
     * @var \AppBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id_utilisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $utilisateurUtilisateur;

    /**
     * @var \AppBundle\Entity\TypeDocument
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_document_id_type_document", referencedColumnName="id_type_document")
     * })
     */
    private $typeDocumentTypeDocument;



    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Document
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
     * Set repertoire
     *
     * @param string $repertoire
     *
     * @return Document
     */
    public function setRepertoire($repertoire)
    {
        $this->repertoire = $repertoire;

        return $this;
    }

    /**
     * Get repertoire
     *
     * @return string
     */
    public function getRepertoire()
    {
        return $this->repertoire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get idDocuments
     *
     * @return integer
     */
    public function getIdDocuments()
    {
        return $this->idDocuments;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return Document
     */
    public function setUtilisateurUtilisateur(\AppBundle\Entity\Utilisateur $utilisateurUtilisateur = null)
    {
        $this->utilisateurUtilisateur = $utilisateurUtilisateur;

        return $this;
    }

    /**
     * Get utilisateurUtilisateur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getUtilisateurUtilisateur()
    {
        return $this->utilisateurUtilisateur;
    }

    /**
     * Set typeDocumentTypeDocument
     *
     * @param \AppBundle\Entity\TypeDocument $typeDocumentTypeDocument
     *
     * @return Document
     */
    public function setTypeDocumentTypeDocument(\AppBundle\Entity\TypeDocument $typeDocumentTypeDocument = null)
    {
        $this->typeDocumentTypeDocument = $typeDocumentTypeDocument;

        return $this;
    }

    /**
     * Get typeDocumentTypeDocument
     *
     * @return \AppBundle\Entity\TypeDocument
     */
    public function getTypeDocumentTypeDocument()
    {
        return $this->typeDocumentTypeDocument;
    }
}
