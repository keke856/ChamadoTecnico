<?php
 
 namespace Microstar\Entity;
 use Doctrine\Common\Collections\ArrayCollection;
 use Microstar\Entity\Clientes;

 require __DIR__."/../../vendor/autoload.php";
/**
  * @Entity
  */

class Chamados
 {

  /**
   * @Id
   * @GeneratedValue
   * @Column (type="integer")
   */
    private $id;
    
    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @Column(type="text")
     */
    private $telephone;

     /**
     * @Column(type="text")
     */
    private $descriptions;

   /**
    * @Column(type="string")
    */
    private $images;

    /**
     * @Column(type="string")
     */
    private $status;
/**
 * @Column(type="string")
 */
    private $data;

    /**
     * @Column(type="string")
     */
    private $priority;


    /**
     * @Column(type="string")
     */
    private $concluded;

    /**
     *@Column(type="string")
     */
    private $tecnicos;

  /**
   * @ManyToOne(targetEntity="Login")
   * 
   */
    private $login;


  
        public function getId():int
        {
          return $this->id;
        }

        public function setName(string $name)
        {
          $this->name = $name;
          return $this;
        }

        public function getName():string
        {
          return $this->name;
        }

        
        public function setTelephone(string $telephone)
        {
          $this->telephone = $telephone;
          return $this;
        }

        public function getTelephone():string
        {
          return $this->telephone;
        }

         
        public function setDescriptions(string $descriptions)
        {
          $this->descriptions = $descriptions;
          return $this;
        }

        public function getDescriptions():string
        {
          return $this->descriptions;
        }

        public function setStatus(string $status)
        {
          $this->status = $status;
          return $this;
        }

        public function getStatus():string
        {
          return $this->status;
        }

        public function setImages(string $images)
        {
          $this->images = $images;
          return $this;
        }

        public function getImages():string
        {
          return $this->images;
        }

        public function setData($data)
        {
       $this->data = $data;
       return $this;
        }

        public function getData()
        {
          return $this->data;
        }

        public function setPriority($priority)
        {
         $this->priority = $priority;
         return $this;
        }

        public function getPriority()
        {
          return $this->priority;
        }

        public function setConcluded($concluded)
        {
            $this->concluded = $concluded;
            return $this;
        }

        public function getConcluded()
        {
            return  $this->concluded;
        }


        
        public function setTecnicos($tecnicos)
        {
         $this->tecnicos = $tecnicos;
         return $this;
        }

        public function getTecnicos()
        {
          return $this->tecnicos;
        }


        public function setLogin(Login $login)
        {
           $this->login = $login;
           return $this;
        }
      
         
        public function getLogin()
        {
          return  $this->login;
          
        }

    
        


 }





?>