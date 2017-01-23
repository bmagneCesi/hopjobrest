<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notation
 *
 * @ORM\Table(name="notation", indexes={@ORM\Index(name="fk_notation_utilisateur1_idx", columns={"utilisateur_id_utilisateur"})})
 * @ORM\Entity
 */
class Notation
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_notation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotation;

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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Notation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Notation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Get idNotation
     *
     * @return integer
     */
    public function getIdNotation()
    {
        return $this->idNotation;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return Notation
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
}
