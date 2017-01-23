<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_message_utilisateur1_idx", columns={"utilisateur_id_utilisateur"}), @ORM\Index(name="fk_message_utilisateur2_idx", columns={"utilisateur_id_utilisateur1"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=45, nullable=true)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=45, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_message", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var \AppBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id_utilisateur1", referencedColumnName="id_utilisateur")
     * })
     */
    private $utilisateurUtilisateur1;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get idMessage
     *
     * @return integer
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set utilisateurUtilisateur1
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurUtilisateur1
     *
     * @return Message
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
     * @return Message
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
