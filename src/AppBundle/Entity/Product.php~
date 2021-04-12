<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */

class Product{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id ;

    /**
     * @ORM\Column(name="name" , type="string")
     */
    protected $name ;
    
    public function getId(){
        return $this->id ;
    }

    public function getName(){
        return $this->name ;
    }

    public function setName($name){
        $this->name = $name ;
    }
}