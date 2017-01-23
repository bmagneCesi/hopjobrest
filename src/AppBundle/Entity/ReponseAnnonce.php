<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseAnnonce
 *
 * @ORM\Table(name="reponse_annonce", indexes={@ORM\Index(name="fk_reponse_annonce_annonce1_idx", columns={"annonce_id_annonce"}), @ORM\Index(name="fk_reponse_annonce_utilisateur1_idx", columns={"utilisateur_id_utilisateur"}), @ORM\Index(name="fk_reponse_annonce_utilisateur2_idx", columns={"utilisateur_id_utilisateur1"})})
 * @ORM\Entity
 */
class ReponseAnnonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=true)
     */
    private $commentaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut_paiement", type="boolean", nullable=true)
     */
    private $statutPaiement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation", type="boolean", nullable=true)
     */
    private $validation;

    /**
     * @var integer
     *
     * @ORM\Column(name="annonce_id_annonce", type="integer", nullable=false)
     */
    private $annonceIdAnnonce;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id_utilisateur", type="integer", nullable=false)
     */
    private $utilisateurIdUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id_utilisateur1", type="integer", nullable=false)
     */
    private $utilisateurIdUtilisateur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_reponse_annonce", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponseAnnonce;



    /**
     * Set code
     *
     * @param string $code
     *
     * @return ReponseAnnonce
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return ReponseAnnonce
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
     * Set statutPaiement
     *
     * @param boolean $statutPaiement
     *
     * @return ReponseAnnonce
     */
    public function setStatutPaiement($statutPaiement)
    {
        $this->statutPaiement = $statutPaiement;

        return $this;
    }

    /**
     * Get statutPaiement
     *
     * @return boolean
     */
    public function getStatutPaiement()
    {
        return $this->statutPaiement;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     *
     * @return ReponseAnnonce
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set annonceIdAnnonce
     *
     * @param integer $annonceIdAnnonce
     *
     * @return ReponseAnnonce
     */
    public function setAnnonceIdAnnonce($annonceIdAnnonce)
    {
        $this->annonceIdAnnonce = $annonceIdAnnonce;

        return $this;
    }

    /**
     * Get annonceIdAnnonce
     *
     * @return integer
     */
    public function getAnnonceIdAnnonce()
    {
        return $this->annonceIdAnnonce;
    }

    /**
     * Set utilisateurIdUtilisateur
     *
     * @param integer $utilisateurIdUtilisateur
     *
     * @return ReponseAnnonce
     */
    public function setUtilisateurIdUtilisateur($utilisateurIdUtilisateur)
    {
        $this->utilisateurIdUtilisateur = $utilisateurIdUtilisateur;

        return $this;
    }

    /**
     * Get utilisateurIdUtilisateur
     *
     * @return integer
     */
    public function getUtilisateurIdUtilisateur()
    {
        return $this->utilisateurIdUtilisateur;
    }

    /**
     * Set utilisateurIdUtilisateur1
     *
     * @param integer $utilisateurIdUtilisateur1
     *
     * @return ReponseAnnonce
     */
    public function setUtilisateurIdUtilisateur1($utilisateurIdUtilisateur1)
    {
        $this->utilisateurIdUtilisateur1 = $utilisateurIdUtilisateur1;

        return $this;
    }

    /**
     * Get utilisateurIdUtilisateur1
     *
     * @return integer
     */
    public function getUtilisateurIdUtilisateur1()
    {
        return $this->utilisateurIdUtilisateur1;
    }

    /**
     * Get idReponseAnnonce
     *
     * @return integer
     */
    public function getIdReponseAnnonce()
    {
        return $this->idReponseAnnonce;
    }
    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $utilisateurUtilisateur1;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $utilisateurUtilisateur;

    /**
     * @var \AppBundle\Entity\Annonce
     */
    private $annonceAnnonce;


    /**
     * Set utilisateurUtilisateur1
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur1
     *
     * @return ReponseAnnonce
     */
    public function setUtilisateurUtilisateur1(\AppBundle\Entity\Utilisateur $utilisateurUtilisateur1 = null)
    {
        $this->utilisateurUtilisateur1 = $utilisateurUtilisateur1;

        return $this;
    }

    /**
     * Get utilisateurUtilisateur1
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getUtilisateurUtilisateur1()
    {
        return $this->utilisateurUtilisateur1;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return ReponseAnnonce
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
     * Set annonceAnnonce
     *
     * @param \AppBundle\Entity\Annonce $annonceAnnonce
     *
     * @return ReponseAnnonce
     */
    public function setAnnonceAnnonce(\AppBundle\Entity\Annonce $annonceAnnonce = null)
    {
        $this->annonceAnnonce = $annonceAnnonce;

        return $this;
    }

    /**
     * Get annonceAnnonce
     *
     * @return \AppBundle\Entity\Annonce
     */
    public function getAnnonceAnnonce()
    {
        return $this->annonceAnnonce;
    }
}
