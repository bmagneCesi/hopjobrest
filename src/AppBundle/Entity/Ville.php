<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ville", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVille;



    /**
     * Get idVille
     *
     * @return integer
     */
    public function getIdVille()
    {
        return $this->idVille;
    }
    /**
     * @var string
     */
    private $villeDepartement;

    /**
     * @var string
     */
    private $villeSlug;

    /**
     * @var string
     */
    private $villeNom;

    /**
     * @var string
     */
    private $villeNomSimple;

    /**
     * @var string
     */
    private $villeNomReel;

    /**
     * @var string
     */
    private $villeNomSoundex;

    /**
     * @var string
     */
    private $villeNomMetaphone;

    /**
     * @var string
     */
    private $villeCodePostal;

    /**
     * @var string
     */
    private $villeCommune;

    /**
     * @var string
     */
    private $villeCodeCommune;

    /**
     * @var string
     */
    private $villeArrondissement;

    /**
     * @var string
     */
    private $villeCanton;

    /**
     * @var integer
     */
    private $villeAmdi;

    /**
     * @var integer
     */
    private $villePopulation2010;

    /**
     * @var integer
     */
    private $villePopulation1999;

    /**
     * @var integer
     */
    private $villePopulation2012;

    /**
     * @var integer
     */
    private $villeDensite2010;

    /**
     * @var float
     */
    private $villeSurface;

    /**
     * @var float
     */
    private $villeLongitudeDeg;

    /**
     * @var float
     */
    private $villeLatitudeDeg;

    /**
     * @var string
     */
    private $villeLongitudeGrd;

    /**
     * @var string
     */
    private $villeLatitudeGrd;

    /**
     * @var string
     */
    private $villeLongitudeDms;

    /**
     * @var string
     */
    private $villeLatitudeDms;

    /**
     * @var integer
     */
    private $villeZmin;

    /**
     * @var integer
     */
    private $villeZmax;


    /**
     * Set villeDepartement
     *
     * @param string $villeDepartement
     *
     * @return Ville
     */
    public function setVilleDepartement($villeDepartement)
    {
        $this->villeDepartement = $villeDepartement;

        return $this;
    }

    /**
     * Get villeDepartement
     *
     * @return string
     */
    public function getVilleDepartement()
    {
        return $this->villeDepartement;
    }

    /**
     * Set villeSlug
     *
     * @param string $villeSlug
     *
     * @return Ville
     */
    public function setVilleSlug($villeSlug)
    {
        $this->villeSlug = $villeSlug;

        return $this;
    }

    /**
     * Get villeSlug
     *
     * @return string
     */
    public function getVilleSlug()
    {
        return $this->villeSlug;
    }

    /**
     * Set villeNom
     *
     * @param string $villeNom
     *
     * @return Ville
     */
    public function setVilleNom($villeNom)
    {
        $this->villeNom = $villeNom;

        return $this;
    }

    /**
     * Get villeNom
     *
     * @return string
     */
    public function getVilleNom()
    {
        return $this->villeNom;
    }

    /**
     * Set villeNomSimple
     *
     * @param string $villeNomSimple
     *
     * @return Ville
     */
    public function setVilleNomSimple($villeNomSimple)
    {
        $this->villeNomSimple = $villeNomSimple;

        return $this;
    }

    /**
     * Get villeNomSimple
     *
     * @return string
     */
    public function getVilleNomSimple()
    {
        return $this->villeNomSimple;
    }

    /**
     * Set villeNomReel
     *
     * @param string $villeNomReel
     *
     * @return Ville
     */
    public function setVilleNomReel($villeNomReel)
    {
        $this->villeNomReel = $villeNomReel;

        return $this;
    }

    /**
     * Get villeNomReel
     *
     * @return string
     */
    public function getVilleNomReel()
    {
        return $this->villeNomReel;
    }

    /**
     * Set villeNomSoundex
     *
     * @param string $villeNomSoundex
     *
     * @return Ville
     */
    public function setVilleNomSoundex($villeNomSoundex)
    {
        $this->villeNomSoundex = $villeNomSoundex;

        return $this;
    }

    /**
     * Get villeNomSoundex
     *
     * @return string
     */
    public function getVilleNomSoundex()
    {
        return $this->villeNomSoundex;
    }

    /**
     * Set villeNomMetaphone
     *
     * @param string $villeNomMetaphone
     *
     * @return Ville
     */
    public function setVilleNomMetaphone($villeNomMetaphone)
    {
        $this->villeNomMetaphone = $villeNomMetaphone;

        return $this;
    }

    /**
     * Get villeNomMetaphone
     *
     * @return string
     */
    public function getVilleNomMetaphone()
    {
        return $this->villeNomMetaphone;
    }

    /**
     * Set villeCodePostal
     *
     * @param string $villeCodePostal
     *
     * @return Ville
     */
    public function setVilleCodePostal($villeCodePostal)
    {
        $this->villeCodePostal = $villeCodePostal;

        return $this;
    }

    /**
     * Get villeCodePostal
     *
     * @return string
     */
    public function getVilleCodePostal()
    {
        return $this->villeCodePostal;
    }

    /**
     * Set villeCommune
     *
     * @param string $villeCommune
     *
     * @return Ville
     */
    public function setVilleCommune($villeCommune)
    {
        $this->villeCommune = $villeCommune;

        return $this;
    }

    /**
     * Get villeCommune
     *
     * @return string
     */
    public function getVilleCommune()
    {
        return $this->villeCommune;
    }

    /**
     * Set villeCodeCommune
     *
     * @param string $villeCodeCommune
     *
     * @return Ville
     */
    public function setVilleCodeCommune($villeCodeCommune)
    {
        $this->villeCodeCommune = $villeCodeCommune;

        return $this;
    }

    /**
     * Get villeCodeCommune
     *
     * @return string
     */
    public function getVilleCodeCommune()
    {
        return $this->villeCodeCommune;
    }

    /**
     * Set villeArrondissement
     *
     * @param string $villeArrondissement
     *
     * @return Ville
     */
    public function setVilleArrondissement($villeArrondissement)
    {
        $this->villeArrondissement = $villeArrondissement;

        return $this;
    }

    /**
     * Get villeArrondissement
     *
     * @return string
     */
    public function getVilleArrondissement()
    {
        return $this->villeArrondissement;
    }

    /**
     * Set villeCanton
     *
     * @param string $villeCanton
     *
     * @return Ville
     */
    public function setVilleCanton($villeCanton)
    {
        $this->villeCanton = $villeCanton;

        return $this;
    }

    /**
     * Get villeCanton
     *
     * @return string
     */
    public function getVilleCanton()
    {
        return $this->villeCanton;
    }

    /**
     * Set villeAmdi
     *
     * @param integer $villeAmdi
     *
     * @return Ville
     */
    public function setVilleAmdi($villeAmdi)
    {
        $this->villeAmdi = $villeAmdi;

        return $this;
    }

    /**
     * Get villeAmdi
     *
     * @return integer
     */
    public function getVilleAmdi()
    {
        return $this->villeAmdi;
    }

    /**
     * Set villePopulation2010
     *
     * @param integer $villePopulation2010
     *
     * @return Ville
     */
    public function setVillePopulation2010($villePopulation2010)
    {
        $this->villePopulation2010 = $villePopulation2010;

        return $this;
    }

    /**
     * Get villePopulation2010
     *
     * @return integer
     */
    public function getVillePopulation2010()
    {
        return $this->villePopulation2010;
    }

    /**
     * Set villePopulation1999
     *
     * @param integer $villePopulation1999
     *
     * @return Ville
     */
    public function setVillePopulation1999($villePopulation1999)
    {
        $this->villePopulation1999 = $villePopulation1999;

        return $this;
    }

    /**
     * Get villePopulation1999
     *
     * @return integer
     */
    public function getVillePopulation1999()
    {
        return $this->villePopulation1999;
    }

    /**
     * Set villePopulation2012
     *
     * @param integer $villePopulation2012
     *
     * @return Ville
     */
    public function setVillePopulation2012($villePopulation2012)
    {
        $this->villePopulation2012 = $villePopulation2012;

        return $this;
    }

    /**
     * Get villePopulation2012
     *
     * @return integer
     */
    public function getVillePopulation2012()
    {
        return $this->villePopulation2012;
    }

    /**
     * Set villeDensite2010
     *
     * @param integer $villeDensite2010
     *
     * @return Ville
     */
    public function setVilleDensite2010($villeDensite2010)
    {
        $this->villeDensite2010 = $villeDensite2010;

        return $this;
    }

    /**
     * Get villeDensite2010
     *
     * @return integer
     */
    public function getVilleDensite2010()
    {
        return $this->villeDensite2010;
    }

    /**
     * Set villeSurface
     *
     * @param float $villeSurface
     *
     * @return Ville
     */
    public function setVilleSurface($villeSurface)
    {
        $this->villeSurface = $villeSurface;

        return $this;
    }

    /**
     * Get villeSurface
     *
     * @return float
     */
    public function getVilleSurface()
    {
        return $this->villeSurface;
    }

    /**
     * Set villeLongitudeDeg
     *
     * @param float $villeLongitudeDeg
     *
     * @return Ville
     */
    public function setVilleLongitudeDeg($villeLongitudeDeg)
    {
        $this->villeLongitudeDeg = $villeLongitudeDeg;

        return $this;
    }

    /**
     * Get villeLongitudeDeg
     *
     * @return float
     */
    public function getVilleLongitudeDeg()
    {
        return $this->villeLongitudeDeg;
    }

    /**
     * Set villeLatitudeDeg
     *
     * @param float $villeLatitudeDeg
     *
     * @return Ville
     */
    public function setVilleLatitudeDeg($villeLatitudeDeg)
    {
        $this->villeLatitudeDeg = $villeLatitudeDeg;

        return $this;
    }

    /**
     * Get villeLatitudeDeg
     *
     * @return float
     */
    public function getVilleLatitudeDeg()
    {
        return $this->villeLatitudeDeg;
    }

    /**
     * Set villeLongitudeGrd
     *
     * @param string $villeLongitudeGrd
     *
     * @return Ville
     */
    public function setVilleLongitudeGrd($villeLongitudeGrd)
    {
        $this->villeLongitudeGrd = $villeLongitudeGrd;

        return $this;
    }

    /**
     * Get villeLongitudeGrd
     *
     * @return string
     */
    public function getVilleLongitudeGrd()
    {
        return $this->villeLongitudeGrd;
    }

    /**
     * Set villeLatitudeGrd
     *
     * @param string $villeLatitudeGrd
     *
     * @return Ville
     */
    public function setVilleLatitudeGrd($villeLatitudeGrd)
    {
        $this->villeLatitudeGrd = $villeLatitudeGrd;

        return $this;
    }

    /**
     * Get villeLatitudeGrd
     *
     * @return string
     */
    public function getVilleLatitudeGrd()
    {
        return $this->villeLatitudeGrd;
    }

    /**
     * Set villeLongitudeDms
     *
     * @param string $villeLongitudeDms
     *
     * @return Ville
     */
    public function setVilleLongitudeDms($villeLongitudeDms)
    {
        $this->villeLongitudeDms = $villeLongitudeDms;

        return $this;
    }

    /**
     * Get villeLongitudeDms
     *
     * @return string
     */
    public function getVilleLongitudeDms()
    {
        return $this->villeLongitudeDms;
    }

    /**
     * Set villeLatitudeDms
     *
     * @param string $villeLatitudeDms
     *
     * @return Ville
     */
    public function setVilleLatitudeDms($villeLatitudeDms)
    {
        $this->villeLatitudeDms = $villeLatitudeDms;

        return $this;
    }

    /**
     * Get villeLatitudeDms
     *
     * @return string
     */
    public function getVilleLatitudeDms()
    {
        return $this->villeLatitudeDms;
    }

    /**
     * Set villeZmin
     *
     * @param integer $villeZmin
     *
     * @return Ville
     */
    public function setVilleZmin($villeZmin)
    {
        $this->villeZmin = $villeZmin;

        return $this;
    }

    /**
     * Get villeZmin
     *
     * @return integer
     */
    public function getVilleZmin()
    {
        return $this->villeZmin;
    }

    /**
     * Set villeZmax
     *
     * @param integer $villeZmax
     *
     * @return Ville
     */
    public function setVilleZmax($villeZmax)
    {
        $this->villeZmax = $villeZmax;

        return $this;
    }

    /**
     * Get villeZmax
     *
     * @return integer
     */
    public function getVilleZmax()
    {
        return $this->villeZmax;
    }
}
