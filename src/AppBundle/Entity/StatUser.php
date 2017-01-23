<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatUser
 *
 * @ORM\Table(name="stat_user", indexes={@ORM\Index(name="fk_stat_user_utilisateur1_idx", columns={"utilisateur_id_utilisateur"})})
 * @ORM\Entity
 */
class StatUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_job", type="integer", nullable=true)
     */
    private $nbJob;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id_utilisateur", type="integer", nullable=false)
     */
    private $utilisateurIdUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_stat_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatUser;



    /**
     * Set nbJob
     *
     * @param integer $nbJob
     *
     * @return StatUser
     */
    public function setNbJob($nbJob)
    {
        $this->nbJob = $nbJob;

        return $this;
    }

    /**
     * Get nbJob
     *
     * @return integer
     */
    public function getNbJob()
    {
        return $this->nbJob;
    }

    /**
     * Set revenu
     *
     * @param float $revenu
     *
     * @return StatUser
     */
    public function setRevenu($revenu)
    {
        $this->revenu = $revenu;

        return $this;
    }

    /**
     * Get revenu
     *
     * @return float
     */
    public function getRevenu()
    {
        return $this->revenu;
    }

    /**
     * Set utilisateurIdUtilisateur
     *
     * @param integer $utilisateurIdUtilisateur
     *
     * @return StatUser
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
     * Get idStatUser
     *
     * @return integer
     */
    public function getIdStatUser()
    {
        return $this->idStatUser;
    }
    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $utilisateurUtilisateur;


    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return StatUser
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
