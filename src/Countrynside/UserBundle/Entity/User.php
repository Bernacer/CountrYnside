<?php

namespace Countrynside\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 *
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="prenom",type="string")
     * 
     */
    protected $prenom;

    /**
     * @ORM\Column(name="nom",type="string")
     * 
     */
    protected $nom;

    /**
     *
     * @ORM\Column(name="premium",type="boolean")
     */
    protected $premium = false;
        
    /**
     *
     * @var type \DateTime
     * @ORM\Column(name="date_expiration",type="date",nullable=true)
     */
    protected $dateExpiration;
    /**
     * @ORM\OneToMany(targetEntity="\Countrynside\SiteBundle\Entity\Event", mappedBy="user")
     */
    protected $events;
    
    /**
     * @ORM\OneToMany(targetEntity="Countrynside\PaymentBundle\Entity\Order",mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $orders;
    
    public function __construct() {
        parent::__construct();
        $this->events = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }
    
    /**
     * Set premium
     *
     * @param boolean $type
     * @return User
     */
    public function setPremium($type) {
        $this->premium = $type;

        return $this;
    }

    /**
     * Get premium
     *
     * @return boolean
     */
    public function isPremium() {
        return $this->premium;
    }
    
    /**
     * Add events
     *
     * @param \Countrynside\SiteBundle\Entity\Event $events
     * @return User
     */
    public function addEvent(\Countrynside\SiteBundle\Entity\Event $events)
    {
        $this->events[] = $events;
    
        return $this;
    }

    /**
     * Remove events
     *
     * @param \Countrynside\SiteBundle\Entity\Event $events
     */
    public function removeEvent(\Countrynside\SiteBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    public function getDateExpiration(){
        return $this->dateExpiration;
    }
    
    public function setDateExpiration($date){
        $this->dateExpiration = $date;
    }
}
