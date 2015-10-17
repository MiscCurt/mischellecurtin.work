<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Categories")
 */
class Categories
{
    /**
     * @ORM\Column (name = "category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column (name = "category_name", type="string", length = 255)
     */
    protected $name;

    /**
    * @ORM\OneToMany(targetEntity="Software", mappedBy="category_id")
    */
   protected $software;

    public function __construct()
    {
        $this->software = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Categories
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     *
     * @return Categories
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
     * Add software
     *
     * @param \AppBundle\Entity\Software $software
     *
     * @return Categories
     */
    public function addSoftware(\AppBundle\Entity\Software $software)
    {
        $this->software[] = $software;

        return $this;
    }

    /**
     * Remove software
     *
     * @param \AppBundle\Entity\Software $software
     */
    public function removeSoftware(\AppBundle\Entity\Software $software)
    {
        $this->software->removeElement($software);
    }

    /**
     * Get software
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoftware()
    {
        return $this->software;
    }
}
