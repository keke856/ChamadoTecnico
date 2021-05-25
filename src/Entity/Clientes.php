<?php

namespace Microstar\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Microstar\Entity\Login;

require __DIR__."/../../vendor/autoload.php";

/**
 * @Entity
 */
class Clientes{

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

  
     /**
     * @Column(type="string")
     */
    private $telephone;

     /**
     * @Column(type="string")
     */
    private $company;

     /**
     * @Column(type="string")
     */
    private $cpfCnpj;

     /**
     * @Column(type="string")
     */
    private $address;

     /**
     * @Column(type="string")
     */
    private $city;

     /**
     * @Column(type="string")
     */
    private $state;

    /**
     * @Column(type="string")
     */
    private $district;

    /**
     * @OneToOne(targetEntity="Login", inversedBy="clientes")
     * @JoinColumn(nullable=true)
     */
  
     private $login;

 



public function getId()
{
    return $this->id;
}


public function setTelephone($telephone)
{
  $this->telephone = $telephone;
  return $this;
}

public function getTelephone()
{
    return $this->telephone;
}

public function setCompany($company)
{

  $this->company = $company;
  return $this;
}

public function getCompany()
{
    return $this->company;
}


public function setCpfCnpj($cpfCnpj)
{
  $this->cpfCnpj = $cpfCnpj;
  return $this;
}

public function getCpfCnpj()
{
    return $this->cpfCnpj;
}


public function setAddress($address)
{
  $this->address = $address;
  return $this;
}

public function getAddress()
{
    return $this->address;
}

public function setDistrict($district)
{
  $this->district = $district;
  return $this;
}

public function getDistrict()
{
  return $this->district ;
}

public function setCity($city)
{
  $this->city = $city;
  return $this;
}

public function getCity()
{
    return $this->city;
}

public function setState($state)
{
  $this->state = $state;
  return $this;
}

public function getState()
{
    return $this->state;
}

public function setLogin(Login $login)
{
 

  $this->login = $login;
  return $this;
}

public function getLogin()
{
  return $this->login;
}


}