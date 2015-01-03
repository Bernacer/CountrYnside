<?php
namespace Countrynside\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Countrynside\CalendarBundle\Entity\Booking
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Countrynside\CalendarBundle\Entity\BookingRepository")
 */
class Booking
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Countrynside\CalendarBundle\Entity\State", inversedBy="bookings")
     */
    private $state;
    
    public function setState(\Countrynside\CalendarBundle\Entity\State $state)
    {
        $this->state = $state;
        return $this;
    }
    
    public function getState()
    {
        return $this->state;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Countrynside\CalendarBundle\Entity\Item", inversedBy="bookings")
     */
    private $item;
    
    public function setItem(\Countrynside\CalendarBundle\Entity\Item $item)
    {
        $this->item = $item;
        return $this;
    }
    
    public function getItem()
    {
        return $this->item;
    }
    
    /**
     * @var \DateTime $theDate
     *
     * @ORM\Column(name="theDate", type="date")
     */
    private $theDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set theDate
     *
     * @param \DateTime $theDate
     * @return Booking
     */
    public function setTheDate($theDate)
    {
        $this->theDate = $theDate;
    
        return $this;
    }

    /**
     * Get theDate
     *
     * @return \DateTime 
     */
    public function getTheDate()
    {
        return $this->theDate;
    }
}
