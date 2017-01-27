<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatUser
 *
 * @ORM\Table(name="stat_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatUserRepository")
 */
class StatUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_job", type="integer")
     */
    private $nbJob;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu", type="float")
     */
    private $revenu;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;



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
     * @return int
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
     * Set utilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateur
     *
     * @return StatUser
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
}
