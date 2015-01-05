<?php

namespace Countrynside\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\OrderInterface;

/**
 * @ORM\Table(name="tableorder")
 * @ORM\Entity
 */
class Order implements OrderInterface
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
    protected $number;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @ORM\ManyToOne(targetEntity="Countrynside\UserBundle\Entity\User",inversedBy="orders")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $totalAmount;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $currencyCode;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $currencyDigitsAfterDecimalPoint;

    /**
     * @var array
     * @ORM\Column(type="array")
     */
    protected $details;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Countrynside\PaymentBundle\Entity\Offre",inversedBy="orders")
     */
    protected $offre;
    
    public function __construct()
    {
        $this->details = array();
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * {@inheritDoc}
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    public function getUser(){
        return $this->user;
    }
    
    public function setUser($user){
        $this->user=$user;
    }
    /**
     * @param string $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @param int    $digitsAfterDecimalPoint
     */
    public function setCurrencyCode($currencyCode, $digitsAfterDecimalPoint = 2)
    {
        $this->currencyCode = $currencyCode;
        $this->currencyDigitsAfterDecimalPoint = $digitsAfterDecimalPoint;
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyDigitsAfterDecimalPoint()
    {
        return $this->currencyDigitsAfterDecimalPoint;
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * {@inheritDoc}
     *
     * @param array|\Traversable $details
     */
    public function setDetails($details)
    {
        if ($details instanceof \Traversable) {
            $details = iterator_to_array($details);
        }

        $this->details = $details;
    }

    public function getClientEmail() {
        return $this->user->getEmail();
    }
    
    public function getOffre(){
        return $this->offre;
    }
    
    public function setOffre($offre){
        $this->offre = $offre;
    }

}
