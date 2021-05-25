<?php

namespace Microstar\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */

class Tecnicos{
   
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @Column(type="string")
     */
    private $email;

    /**
     * @Column(type="string")
     */
    private $password;
   
    /**
     * @Column(type="string")
     */
    private $type;
 



public function getId()
{
    return $this->id;
}

public function setName($name)
{
 $this->name = $name;
 return $this;
}

public function getName()
{
    return $this->name;
}

public function setEmail($email)
{
 $this->email = $email;
 return $this;
}

public function getEmail()
{
    return $this->email;
}

public function setPassword($password)
{
 $this->password = $password;
 return $this;
}

public function getPassword()
{
    return $this->password;
}

public function setType($type)
{
    $this->type = $type;
    return $this;
}

public function getType()
{
    return $this->type;
}




}