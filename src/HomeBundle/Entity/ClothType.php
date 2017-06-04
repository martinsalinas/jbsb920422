<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ClothType
 *
 * @ORM\Table(name="cloth_type")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\ClothTypeRepository")
 */
class ClothType
{
    
    /**
     * @ORM\OneToMany(targetEntity="Cloth", mappedBy="cloth_type")
     */
    protected $cloth;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    public function __construct()
    {
        $this->cloth = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return (string) $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ClothType
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
     * Add cloth
     *
     * @param \HomeBundle\Entity\Cloth $cloth
     * @return ClothType
     */
    public function addCloth(\HomeBundle\Entity\Cloth $cloth)
    {
        $this->cloth[] = $cloth;

        return $this;
    }

    /**
     * Remove cloth
     *
     * @param \HomeBundle\Entity\Cloth $cloth
     */
    public function removeCloth(\HomeBundle\Entity\Cloth $cloth)
    {
        $this->cloth->removeElement($cloth);
    }

    /**
     * Get cloth
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCloth()
    {
        return $this->cloth;
    }
    
    public function __toString() {
        return (string) $this->getId();
    }
}
