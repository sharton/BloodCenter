<?php

namespace BloodCenter\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announcement
 */
class Announcement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $bloodGroup;

    /**
     * @var string
     */
    private $rhesusFactor;

    /**
     * @var float
     */
    private $quantity;

    /**
     * @var \DateTime
     */
    private $createdAt;


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
     * Set bloodGroup
     *
     * @param string $bloodGroup
     * @return Announcement
     */
    public function setBloodGroup($bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;

        return $this;
    }

    /**
     * Get bloodGroup
     *
     * @return string 
     */
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    /**
     * Set rhesusFactor
     *
     * @param string $rhesusFactor
     * @return Announcement
     */
    public function setRhesusFactor($rhesusFactor)
    {
        $this->rhesusFactor = $rhesusFactor;

        return $this;
    }

    /**
     * Get rhesusFactor
     *
     * @return string 
     */
    public function getRhesusFactor()
    {
        return $this->rhesusFactor;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return Announcement
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Announcement
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function lifecycleCallback(){
        $this->createdAt = new \DateTime('now');
    }

    public function __toString(){
        return "Объявление №" . $this->getId();
    }
}
