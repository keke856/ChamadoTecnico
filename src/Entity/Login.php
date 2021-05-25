<?php

namespace Microstar\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Microstar\Entity\Clientes;
use Microstar\Entity\Chamados;


require __DIR__."/../../vendor/autoload.php";

/**
 *@Entity
 */

class Login {

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
 * @OneToOne(targetEntity="Clientes", mappedBy="login", cascade={"persist", "remove"})
 * @JoinColumn(nullable=true)
 */
private $clientes;

/**
 * @OneToMany(targetEntity="Chamados", mappedBy="login", cascade={"persist", "remove"})
 */
private $chamados;

public function __construct()
{
    $this->chamados = new ArrayCollection();
}

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

public function setClientes(Clientes $clientes):self
{
    $this->clientes = $clientes;
    return $this;
}

public function getClientes()
{
    return $this->clientes;
}


public function addChamado(Chamados $chamados)
{
      $this->chamados->add($chamados);
      $chamados->setLogin($this);
     
}


public function getChamado():Collection
{
  return  $this->chamados;
}


}