<?php

namespace Microstar\Entity;
/**
 * @Entity
 */
class Email{


/**
 * @Id
 * @GeneratedValue
 * @Column(type="integer")
 */
private $id;

/**
 * @Column(type="string")
 */
private $email;

/**
 * @Column(type="boolean")
 */
private $hidden = false;


public function getId()
{
    return $this->id;
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


public function setHidden($hidden)
{
    $this->hidden = $hidden;
    return $this;
}

public function getHidden()
{
    return $this->hidden;
}



}