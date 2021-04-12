<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM ;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id ;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name ;

    /**
     * @ORM\OneToMany(targetEntity="Bug" , mappedBy="reporter")
     * @var Bug[]
     */
    protected $assignedBugs = null ;

    public function __construct(){
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }
    //__constructはphpでのコンストラクタ。初期化された際に実行されるもの。

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
     * @return User
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
     * Add assignedBug
     *
     * @param \AppBundle\Entity\Bug $assignedBug
     *
     * @return User
     */
    public function addAssignedBug(\AppBundle\Entity\Bug $assignedBug)
    {
        $this->assignedBugs[] = $assignedBug;

        return $this;
    }

    /**
     * Remove assignedBug
     *
     * @param \AppBundle\Entity\Bug $assignedBug
     */
    public function removeAssignedBug(\AppBundle\Entity\Bug $assignedBug)
    {
        $this->assignedBugs->removeElement($assignedBug);
    }

    /**
     * Get assignedBugs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssignedBugs()
    {
        return $this->assignedBugs;
    }
}
