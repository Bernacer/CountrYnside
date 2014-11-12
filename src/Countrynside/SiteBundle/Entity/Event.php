<?php

namespace Countrynside\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Countrynside\SiteBundle\Entity\EventRepository")
 */
class Event {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var integer
     *
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @Assert\Regex("#^0[1-68]([-. ]?[0-9]{2}){4}$#", message="Ce numéro n'est pas valide")
     * @ORM\Column(name="telephone", type="string", length=15)
     */
    private $telephone;

    /**
     * @var smallint
     *
     * @Assert\Range(
     *      min = 1,
     *      max = 60000,
     *      minMessage = "Tarif trop bas (minimum 1€)",
     *      maxMessage = "Tarif trop élevé)"
     * )
     * @ORM\Column(name="tarif", type="smallint")
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text")
     */
    private $descriptif;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="datepub", type="datetime")
     */
    private $datepub;

    /**
     * 
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $coord;

    /**
     * @ORM\ManyToOne(targetEntity="Countrynside\UserBundle\Entity\User", inversedBy="events")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Event
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Event
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Event
     */
    public function setCapacite($capacite) {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite() {
        return $this->capacite;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Event
     */
    public function setRegion($region) {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Event
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Event
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set string
     *
     * @param string $tarif
     * @return Event
     */
    public function setTarif($tarif) {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string 
     */
    public function getTarif() {
        return $this->tarif;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return Event
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif() {
        return $this->descriptif;
    }
    
    /**
     * Set coord
     *
     * @param string $coord
     * @return Event
     */
    public function setCoord($coord) {
        $this->coord = $coord;

        return $this;
    }

    /**
     * Get coord
     *
     * @return string 
     */
    public function getCoord() {
        return $this->coord;
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir($user) {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir($user);
    }

    protected function getUploadDir($user) {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return "users/documents/".$user."/photos";
    }

    public function upload($user) {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité
        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file->move($this->getUploadRootDir($user), $this->file->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path = $this->file->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file = null;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Event
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set user
     *
     * @param \Countrynside\UserBundle\Entity\User $user
     * @return Event
     */
    public function setUser(\Countrynside\UserBundle\Entity\User $user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Countrynside\UserBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }


    /**
     * Set datepub
     *
     * @param \DateTime $datepub
     * @return Event
     */
    public function setDatepub($datepub)
    {
        $this->datepub = $datepub;
    
        return $this;
    }

    /**
     * Get datepub
     *
     * @return \DateTime 
     */
    public function getDatepub()
    {
        return $this->datepub;
    }
}
