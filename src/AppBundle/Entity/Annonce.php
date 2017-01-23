<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="fk_annonce_type_vehicule1_idx", columns={"type_vehicule_id_type_vehicule"}), @ORM\Index(name="fk_annonce_utilisateur1_idx", columns={"utilisateur_id_utilisateur"}), @ORM\Index(name="fk_annonce_ville1_idx", columns={"ville_id_ville"}), @ORM\Index(name="fk_annonce_horaire1_idx", columns={"horaire_id_horaire"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_personnes", type="integer", nullable=true)
     */
    private $nbPersonnes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vehicule", type="boolean", nullable=true)
     */
    private $vehicule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="date_fixe", type="boolean", nullable=true)
     */
    private $dateFixe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_limite", type="datetime", nullable=true)
     */
    private $dateLimite;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_total", type="integer", nullable=true)
     */
    private $prixTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_annonce", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var \AppBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id_ville", referencedColumnName="id_ville")
     * })
     */
    private $villeVille;

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
     * @var \AppBundle\Entity\TypeVehicule
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeVehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_vehicule_id_type_vehicule", referencedColumnName="id_type_vehicule")
     * })
     */
    private $typeVehiculeTypeVehicule;

    /**
     * @var \AppBundle\Entity\Horaire
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Horaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="horaire_id_horaire", referencedColumnName="id_horaire")
     * })
     */
    private $horaireHoraire;



    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return Annonce
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return integer
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }

    /**
     * Set vehicule
     *
     * @param boolean $vehicule
     *
     * @return Annonce
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return boolean
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * Set dateFixe
     *
     * @param boolean $dateFixe
     *
     * @return Annonce
     */
    public function setDateFixe($dateFixe)
    {
        $this->dateFixe = $dateFixe;

        return $this;
    }

    /**
     * Get dateFixe
     *
     * @return boolean
     */
    public function getDateFixe()
    {
        return $this->dateFixe;
    }

    /**
     * Set dateLimite
     *
     * @param \DateTime $dateLimite
     *
     * @return Annonce
     */
    public function setDateLimite($dateLimite)
    {
        $this->dateLimite = $dateLimite;

        return $this;
    }

    /**
     * Get dateLimite
     *
     * @return \DateTime
     */
    public function getDateLimite()
    {
        return $this->dateLimite;
    }

    /**
     * Set prixTotal
     *
     * @param integer $prixTotal
     *
     * @return Annonce
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return integer
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Annonce
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idAnnonce
     *
     * @return integer
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set villeVille
     *
     * @param \AppBundle\Entity\Ville $villeVille
     *
     * @return Annonce
     */
    public function setVilleVille(\AppBundle\Entity\Ville $villeVille = null)
    {
        $this->villeVille = $villeVille;

        return $this;
    }

    /**
     * Get villeVille
     *
     * @return \AppBundle\Entity\Ville
     */
    public function getVilleVille()
    {
        return $this->villeVille;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur
     *
     * @return Annonce
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
     * Set typeVehiculeTypeVehicule
     *
     * @param \AppBundle\Entity\TypeVehicule $typeVehiculeTypeVehicule
     *
     * @return Annonce
     */
    public function setTypeVehiculeTypeVehicule(\AppBundle\Entity\TypeVehicule $typeVehiculeTypeVehicule = null)
    {
        $this->typeVehiculeTypeVehicule = $typeVehiculeTypeVehicule;

        return $this;
    }

    /**
     * Get typeVehiculeTypeVehicule
     *
     * @return \AppBundle\Entity\TypeVehicule
     */
    public function getTypeVehiculeTypeVehicule()
    {
        return $this->typeVehiculeTypeVehicule;
    }

    /**
     * Set horaireHoraire
     *
     * @param \AppBundle\Entity\Horaire $horaireHoraire
     *
     * @return Annonce
     */
    public function setHoraireHoraire(\AppBundle\Entity\Horaire $horaireHoraire = null)
    {
        $this->horaireHoraire = $horaireHoraire;

        return $this;
    }

    /**
     * Get horaireHoraire
     *
     * @return \AppBundle\Entity\Horaire
     */
    public function getHoraireHoraire()
    {
        return $this->horaireHoraire;
    }
}
