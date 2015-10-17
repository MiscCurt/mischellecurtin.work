<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Responsibilities")
 */
class Responsibilities
{
    /**
     * @ORM\Column (name = "responsibility_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Employers", inversedBy="responsibilities")
     * @ORM\JoinColumn(name="employer_id", referencedColumnName="employer_id")
     */
    protected $employerId;

    /**
     * @ORM\Column (name = "responsibility", type="text")
     */
    protected $responsibility;

    /**
     * @ORM\Column (name = "responsibility_status", type="string", length=50)
     */
    protected $responsibilityStatus;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Responsibilities
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
     * Set employerId
     *
     * @param int $employerId
     *
     * @return Responsibilities
     */
    public function setEmployerId($employerId)
    {
        $this->employerId = $employerId;

        return $this;
    }

    /**
     * Get employerId
     *
     * @return int
     */
    public function getEmployerId()
    {
        return $this->employerId;
    }

    /**
     * Set responsibility
     *
     * @param string $responsibility
     *
     * @return Responsibilities
     */
    public function setResponsibility($responsibility)
    {
        $this->responsibility = $responsibility;

        return $this;
    }

    /**
     * Get responsibility
     *
     * @return string
     */
    public function getResponsibility()
    {
        return $this->responsibility;
    }

    /**
     * Set responsibilityStatus
     *
     * @param string $responsibilityStatus
     *
     * @return Responsibilities
     */
    public function setResponsibilityStatus($responsibilityStatus)
    {
        $this->responsibilityStatus = $responsibilityStatus;

        return $this;
    }

    /**
     * Get responsibilityStatus
     *
     * @return string
     */
    public function getResponsibilityStatus()
    {
        return $this->responsibilityStatus;
    }
}
