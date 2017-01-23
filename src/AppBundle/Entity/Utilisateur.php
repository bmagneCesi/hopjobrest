<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="fk_utilisateur_civilite_idx", columns={"civilite_id_civilite"}), @ORM\Index(name="fk_utilisateur_type_utilisateur1_idx", columns={"type_utilisateur_id_type_utilisateur"}), @ORM\Index(name="fk_utilisateur_ville1_idx", columns={"ville_id_ville"}), @ORM\Index(name="fk_utilisateur_metier1_idx", columns={"metier_id_metier"}), @ORM\Index(name="fk_utilisateur_domaine1_idx", columns={"domaine_id_domaine"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    public $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=45, nullable=true)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=45, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne_notation", type="float", precision=10, scale=0, nullable=true)
     */
    private $moyenneNotation;

    /**
     * @var integer
     *
     * @ORM\Column(name="civilite_id_civilite", type="integer", nullable=false)
     */
    private $civiliteIdCivilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_utilisateur_id_type_utilisateur", type="integer", nullable=false)
     */
    private $typeUtilisateurIdTypeUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_id_ville", type="integer", nullable=false)
     */
    private $villeIdVille;

    /**
     * @var integer
     *
     * @ORM\Column(name="metier_id_metier", type="integer", nullable=false)
     */
    private $metierIdMetier;

    /**
     * @var integer
     *
     * @ORM\Column(name="domaine_id_domaine", type="integer", nullable=false)
     */
    private $domaineIdDomaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;
/*
 public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }*/

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Utilisateur
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
     * Set moyenneNotation
     *
     * @param float $moyenneNotation
     *
     * @return Utilisateur
     */
    public function setMoyenneNotation($moyenneNotation)
    {
        $this->moyenneNotation = $moyenneNotation;

        return $this;
    }

    /**
     * Get moyenneNotation
     *
     * @return float
     */
    public function getMoyenneNotation()
    {
        return $this->moyenneNotation;
    }

    /**
     * Set civiliteIdCivilite
     *
     * @param integer $civiliteIdCivilite
     *
     * @return Utilisateur
     */
    public function setCiviliteIdCivilite($civiliteIdCivilite)
    {
        $this->civiliteIdCivilite = $civiliteIdCivilite;

        return $this;
    }

    /**
     * Get civiliteIdCivilite
     *
     * @return integer
     */
    public function getCiviliteIdCivilite()
    {
        return $this->civiliteIdCivilite;
    }

    /**
     * Set typeUtilisateurIdTypeUtilisateur
     *
     * @param integer $typeUtilisateurIdTypeUtilisateur
     *
     * @return Utilisateur
     */
    public function setTypeUtilisateurIdTypeUtilisateur($typeUtilisateurIdTypeUtilisateur)
    {
        $this->typeUtilisateurIdTypeUtilisateur = $typeUtilisateurIdTypeUtilisateur;

        return $this;
    }

    /**
     * Get typeUtilisateurIdTypeUtilisateur
     *
     * @return integer
     */
    public function getTypeUtilisateurIdTypeUtilisateur()
    {
        return $this->typeUtilisateurIdTypeUtilisateur;
    }

    /**
     * Set villeIdVille
     *
     * @param integer $villeIdVille
     *
     * @return Utilisateur
     */
    public function setVilleIdVille($villeIdVille)
    {
        $this->villeIdVille = $villeIdVille;

        return $this;
    }

    /**
     * Get villeIdVille
     *
     * @return integer
     */
    public function getVilleIdVille()
    {
        return $this->villeIdVille;
    }

    /**
     * Set metierIdMetier
     *
     * @param integer $metierIdMetier
     *
     * @return Utilisateur
     */
    public function setMetierIdMetier($metierIdMetier)
    {
        $this->metierIdMetier = $metierIdMetier;

        return $this;
    }

    /**
     * Get metierIdMetier
     *
     * @return integer
     */
    public function getMetierIdMetier()
    {
        return $this->metierIdMetier;
    }

    /**
     * Set domaineIdDomaine
     *
     * @param integer $domaineIdDomaine
     *
     * @return Utilisateur
     */
    public function setDomaineIdDomaine($domaineIdDomaine)
    {
        $this->domaineIdDomaine = $domaineIdDomaine;

        return $this;
    }

    /**
     * Get domaineIdDomaine
     *
     * @return integer
     */
    public function getDomaineIdDomaine()
    {
        return $this->domaineIdDomaine;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    public function setIdUtilisateur($setIdUtilisateur)
    {
        $this->setIdUtilisateur = $setIdUtilisateur;

        return $this;
    }

    /**
     * @var \AppBundle\Entity\Ville
     */
    private $villeVille;

    /**
     * @var \AppBundle\Entity\TypeUtilisateur
     */
    private $typeUtilisateurTypeUtilisateur;

    /**
     * @var \AppBundle\Entity\Metier
     */
    private $metierMetier;

    /**
     * @var \AppBundle\Entity\Domaine
     */
    private $domaineDomaine;

    /**
     * @var \AppBundle\Entity\Civilite
     */
    private $civiliteCivilite;


    /**
     * Set villeVille
     *
     * @param \AppBundle\Entity\Ville $villeVille
     *
     * @return Utilisateur
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
     * Set typeUtilisateurTypeUtilisateur
     *
     * @param \AppBundle\Entity\TypeUtilisateur $typeUtilisateurTypeUtilisateur
     *
     * @return Utilisateur
     */
    public function setTypeUtilisateurTypeUtilisateur(\AppBundle\Entity\TypeUtilisateur $typeUtilisateurTypeUtilisateur = null)
    {
        $this->typeUtilisateurTypeUtilisateur = $typeUtilisateurTypeUtilisateur;

        return $this;
    }

    /**
     * Get typeUtilisateurTypeUtilisateur
     *
     * @return \AppBundle\Entity\TypeUtilisateur
     */
    public function getTypeUtilisateurTypeUtilisateur()
    {
        return $this->typeUtilisateurTypeUtilisateur;
    }

    /**
     * Set metierMetier
     *
     * @param \AppBundle\Entity\Metier $metierMetier
     *
     * @return Utilisateur
     */
    public function setMetierMetier(\AppBundle\Entity\Metier $metierMetier = null)
    {
        $this->metierMetier = $metierMetier;

        return $this;
    }

    /**
     * Get metierMetier
     *
     * @return \AppBundle\Entity\Metier
     */
    public function getMetierMetier()
    {
        return $this->metierMetier;
    }

    /**
     * Set domaineDomaine
     *
     * @param \AppBundle\Entity\Domaine $domaineDomaine
     *
     * @return Utilisateur
     */
    public function setDomaineDomaine(\AppBundle\Entity\Domaine $domaineDomaine = null)
    {
        $this->domaineDomaine = $domaineDomaine;

        return $this;
    }

    /**
     * Get domaineDomaine
     *
     * @return \AppBundle\Entity\Domaine
     */
    public function getDomaineDomaine()
    {
        return $this->domaineDomaine;
    }

    /**
     * Set civiliteCivilite
     *
     * @param \AppBundle\Entity\Civilite $civiliteCivilite
     *
     * @return Utilisateur
     */
    public function setCiviliteCivilite(\AppBundle\Entity\Civilite $civiliteCivilite = null)
    {
        $this->civiliteCivilite = $civiliteCivilite;

        return $this;
    }

    /**
     * Get civiliteCivilite
     *
     * @return \AppBundle\Entity\Civilite
     */
    public function getCiviliteCivilite()
    {
        return $this->civiliteCivilite;
    }
}
