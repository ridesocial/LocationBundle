<?php
namespace RideSocial\Bundle\LocationBundle\Traits;

trait GeolocatableTrait
{
    /**
     * Latitude
     * @var float 
     */
    protected $latitude;
    
    /**
     * Longitude
     * @var float 
     */
    protected $longitude;
    
    /**
     * Get latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    /**
     * Set latitude
     * @param float $latitude
     * @return mixed
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        
        return $this;
    }
    
    /**
     * Get longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    /**
     * Set longitude
     * @param float $longitude
     * @return mixed
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        
        return $this;
    }
    
     /**
      * Get coordiantes
      * @param boolean $asString
      * @param string $delimiter
      * @return array|string
      */
    public function getCoordinates($asString = false, $delimeter = ', ')
    {
        if ($asString) {
            return $this->latitude.$delimeter.$this->longitude;
        }
        
        return array($this->latitude, $this->longitude);
    }
    
    /**
     * Get coords
     * @param boolean $asString
     * @param string $delimeter
     * @return array|string
     */
    public function getCoords($asString = false, $delimeter = ', ')
    {
        return $this->getCoordinates($asString, $delimeter);
    }
}
