<?php
namespace RideSocial\Bundle\LocationBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Venue
{
    use TimestampableTrait;
    use BlameableTrait;
    use SluggableTrait;
    
    /**
     * Id
     * @var integer
     */
    protected $id;
    
    /**
     * Name
     * @var string
     */
    protected $name;
    
    /**
     * Description
     * @var string
     */
    protected $description;
    
    /**
     * Address
     * @var \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    protected $address;
    
    /**
     * Events
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $events;
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     * @param string $name
     * @return \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set description
     * @param string $description
     * @return \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get address
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Set address
     * @param \RideSocial\Bundle\LocationBundle\Entity\Address $address
     * @return \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    public function setAddress(\RideSocial\Bundle\LocationBundle\Entity\Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * Get events
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    /**
     * Get event
     * @param string $event
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function getEvent($event)
    {
        return $this->events->get($event);
    }
    
    /**
     * Has events
     * @return boolean
     */
    public function hasEvents()
    {
        return (0 < count($this->events));
    }
    
    /**
     * Has event
     * @param \RideSocial\Bundle\EventBundle\Entity\Event $event
     * @return boolean
     */
    public function hasEvent(\RideSocial\Bundle\EventBundle\Entity\Event $event)
    {
        return $this->events->contains($event);
    }
    
    /**
     * Set events
     * @param array $events
     * @return \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    public function setEvents(array $events)
    {
        if (!$events instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $events = new \Doctrine\Common\Collections\ArrayCollection($events);
        }
        
        $this->events = $events;
        
        return $this;
    }
    
    /**
     * Add event
     * @param \RideSocial\Bundle\EventBundle\Entity\Event $event
     * @return \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    public function addEvent(\RideSocial\Bundle\EventBundle\Entity\Event $event)
    {
        $this->events->add($event);
        
        return $this;
    }
}
