<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DemandeService", mappedBy="annonce")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ReponseAnnonce", mappedBy="annonce")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_personnes", type="integer")
     */
    private $nbPersonnes;

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicule", type="boolean")
     */
    private $vehicule;

    /**
     * @var bool
     *
     * @ORM\Column(name="date_fixe", type="boolean", nullable=true)
     */
    private $dateFixe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_limite", type="datetimetz", nullable=true)
     */
    private $dateLimite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_total", type="float")
     */
    private $prixTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Horaire", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $horaire;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeVehicule", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $typeVehicule;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ville", inversedBy="id")
    * @ORM\JoinColumn(nullable=false)
    */
    private $ville;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

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
     * @return int
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
     * @return bool
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
     * @return bool
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
     * @param float $prixTotal
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
     * @return float
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
     * @return int
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
     * Set horaire
     *
     * @param \AppBundle\Entity\Horaire $horaire
     *
     * @return Annonce
     */
    public function setHoraire(\AppBundle\Entity\Horaire $horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return \AppBundle\Entity\Horaire
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set typeVehicule
     *
     * @param \AppBundle\Entity\TypeVehicule $typeVehicule
     *
     * @return Annonce
     */
    public function setTypeVehicule(\AppBundle\Entity\TypeVehicule $typeVehicule)
    {
        $this->typeVehicule = $typeVehicule;

        return $this;
    }

    /**
     * Get typeVehicule
     *
     * @return \AppBundle\Entity\TypeVehicule
     */
    public function getTypeVehicule()
    {
        return $this->typeVehicule;
    }

    /**
     * Set utilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateur
     *
     * @return Annonce
     */
    public function setUtilisateur(\AppBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set ville
     *
     * @param \AppBundle\Entity\Ville $ville
     *
     * @return Annonce
     */
    public function setVille(\AppBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \AppBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}
