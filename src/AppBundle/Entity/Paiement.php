<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement", indexes={@ORM\Index(name="fk_paiement_utilisateur1_idx", columns={"utilisateur_id_utilisateur"})})
 * @ORM\Entity
 */
class Paiement
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="effectue", type="boolean", nullable=true)
     */
    private $effectue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_paiement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaiement;

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
     * Set effectue
     *
     * @param boolean $effectue
     *
     * @return Paiement
     */
    public function setEffectue($effectue)
    {
        $this->effectue = $effectue;

        return $this;
    }

    /**
     * Get effectue
     *
     * @return boolean
     */
    public function getEffectue()
    {
        return $this->effectue;
    }

    /**
     * Get idPaiement
     *
     * @return integer
     */
    public function getIdPaiement()
    {
        return $this->idPaiement;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return Paiement
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
