<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeService
 *
 * @ORM\Table(name="demande_service", indexes={@ORM\Index(name="fk_demande_service_activite1_idx", columns={"activite_id_activite"}), @ORM\Index(name="fk_demande_service_utilisateur1_idx", columns={"utilisateur_id_utilisateur"}), @ORM\Index(name="fk_demande_service_annonce1_idx", columns={"annonce_id_annonce"})})
 * @ORM\Entity
 */
class DemandeService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="taux_horaire", type="integer", nullable=true)
     */
    private $tauxHoraire;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_demande_service", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemandeService;

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
     * @var \AppBundle\Entity\Annonce
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="annonce_id_annonce", referencedColumnName="id_annonce")
     * })
     */
    private $annonceAnnonce;

    /**
     * @var \AppBundle\Entity\Activite
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activite_id_activite", referencedColumnName="id_activite")
     * })
     */
    private $activiteActivite;



    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return DemandeService
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set tauxHoraire
     *
     * @param integer $tauxHoraire
     *
     * @return DemandeService
     */
    public function setTauxHoraire($tauxHoraire)
    {
        $this->tauxHoraire = $tauxHoraire;

        return $this;
    }

    /**
     * Get tauxHoraire
     *
     * @return integer
     */
    public function getTauxHoraire()
    {
        return $this->tauxHoraire;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return DemandeService
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return DemandeService
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return DemandeService
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Get idDemandeService
     *
     * @return integer
     */
    public function getIdDemandeService()
    {
        return $this->idDemandeService;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return DemandeService
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
     * @return DemandeService
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

    /**
     * Set activiteActivite
     *
     * @param \AppBundle\Entity\Activite $activiteActivite
     *
     * @return DemandeService
     */
    public function setActiviteActivite(\AppBundle\Entity\Activite $activiteActivite = null)
    {
        $this->activiteActivite = $activiteActivite;

        return $this;
    }

    /**
     * Get activiteActivite
     *
     * @return \AppBundle\Entity\Activite
     */
    public function getActiviteActivite()
    {
        return $this->activiteActivite;
    }
}
