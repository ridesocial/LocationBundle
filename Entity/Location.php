<?php
namespace RideSocail\Bundle\LocationBundle\Entity;

use \RideSocial\Bundle\LocationBundle\Traits\GeolocatableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Location
{
    use GeolocatableTrait;
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
     * @return \RideSocail\Bundle\LocationBundle\Entity\Location
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
     * @return \RideSocail\Bundle\LocationBundle\Entity\Location
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
}
