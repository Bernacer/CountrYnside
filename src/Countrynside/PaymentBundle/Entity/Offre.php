<?php

namespace Countrynside\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table
 * @ORM\Entity
 */
class Offre
{
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
     * @ORM\Column(type="string")
     */
    protected $prix;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $duree;

    /**
     * @ORM\OneToMany(targetEntity="Countrynside\PaymentBundle\Entity\Order",mappedBy="offre")
     */
    protected $orders;
    
    public function __construct($duree,$prix,$description) {
        $this->prix=$prix;
        $this->description=$description;
        $this->duree=$duree;
        $this->orders=new ArrayCollection();
    }
    
    public function getPrix(){
        return $this->prix;
    }
    
    public function getDuree(){
        return $this->duree;
    }
    
    public function getDescription(){
        return $this->description;
    }
    

}
