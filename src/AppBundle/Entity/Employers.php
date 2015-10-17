<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Employers")
 */
class Employers
{
    /**
     * @ORM\Column (name = "employer_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column (name = "company_name", type="string", length = 255)
     */
    protected $name;

    /**
     * @ORM\Column (name = "title", type="string", length = 50, nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column (name = "start_date", type="date", nullable=true)
     */
    protected $start;

    /**
    * @ORM\Column (name = "end_date", type="date", nullable=true)
     */
    protected $end;

    /**
    * @ORM\OneToMany(targetEntity="Responsibilities", mappedBy="employer_id")
    */
   protected $responsibilities;

   public function __construct()
   {
       $this->responsibilities = new ArrayCollection();
   }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Employers
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
     * @return Employers
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
     * Set title
     *
     * @param string $title
     *
     * @return Employers
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set start
     *
     * @param string $start
     *
     * @return Employers
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param string $end
     *
     * @return Employers
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }
}
