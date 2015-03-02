<?php
namespace RideSocial\Bundle\LocationBundle\Entity;

class Address extends \RideSocail\Bundle\LocationBundle\Entity\Location
{
    /**
     * Street
     * @var string
     */
    protected $street;
    
    /**
     * Suburb
     * @var string
     */
    protected $suburb;
    
    /**
     * City
     * @var string
     */
    protected $city;

    /**
     * Zone
     * @var string
     */
    protected $zone;
    
    /**
     * Country
     * @var string
     */
    protected $country;
    
    /**
     * Postal code
     * @var string
     */
    protected $postalCode;
    
    /**
     * Phone
     * @var string
     */
    protected $phone;
    
    /**
     * Fax
     * @var string
     */
    protected $fax;
    
    /**
     * Url
     * @var string
     */
    protected $url;
    
    /**
     * Get street
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
    
    /**
     * Set street
     * @param string $street
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        
        return $this;
    }
    
    /**
     * Get suburb
     * @return string
     */
    public function getSuburb()
    {
        return $this->suburb;
    }
    
    /**
     * Set suburb
     * @param string $suburb
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;
        
        return $this;
    }
    
    /**
     * Get city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Set city
     * @param string $city
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        
        return $this;
    }
    
    /**
     * Get zone
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
    
    /**
     * Set zone
     * @param string $zone
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
        
        return $this;
    }
    
    /**
     * Get country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Set country
     * @param string $country
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * Get postal code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    
    /**
     * Set postal code
     * @param string $postalCode
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        
        return $this;
    }
    
    /**
     * Get phone
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Set phone
     * @param string $phone
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        
        return $this;
    }
    
    /**
     * Get fax
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Set fax
     * @param type string $fax
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        
        return $this;
    }
    
    /**
     * Get url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
   
    /**
     * Set url
     * @param string $url
     * @return \RideSocial\Bundle\LocationBundle\Entity\Address
     */
    public function setUrl($url)
    {
        $this->url = $url;
        
        return $this;
    }
}
