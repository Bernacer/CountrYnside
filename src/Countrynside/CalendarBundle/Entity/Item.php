<?php

namespace Countrynside\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Countrynside\CalendarBundle\Entity\Item
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Countrynside\CalendarBundle\Entity\ItemRepository")
 */
class Item
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
     * @ORM\OneToMany(targetEntity="Countrynside\CalendarBundle\Entity\Booking", mappedBy="item", cascade={"persist"})
     * @ORM\OrderBy({"position" = "ASC", "id" = "DESC"})
     */
    private $bookings;

    public function __construct()
    {
        $this->bookings = new ArrayCollection();
    }

    public function getBookings()
    {
        return $this->bookings;
    }

    public function setBookings(\Doctrine\Common\Collections\Collection $bookings)
    {
        foreach ($bookings as $booking)
        {
            $booking->setItem($this);
        }

        $this->bookings = $bookings;
    }

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer $position
     *
     * @ORM\Column(name="position", type="smallint")
     */
    private $position;

    /**
     * @ORM\OneToOne(targetEntity="Countrynside\SiteBundle\Entity\Event")
     * @ORM\JoinColumn(name="id_event", referencedColumnName="id")
     */
    private $id_event;

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
     * Set name
     *
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Item
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Get id_event
     *
     * @return \Countrynside\SiteBundle\Entity\Event
     */
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * Set user
     *
     * @param \Countrynside\SiteBundle\Entity\Event $event
     * @return Event
     */
    public function setIdEvent(\Countrynside\SiteBundle\Entity\Event $event)
    {
        $this->id_event = $event;

        return $this;
    }

}
