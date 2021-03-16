<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * 
 *
 * Sample domain entity that I use in my own projects.  Might help?
 *
 * @ORM\Entity
 * @ORM\Table(name="album")
 *
 */
class Album
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")   
   */
  protected $id;

  /** 
   * @ORM\Column(name="name")  
   */
  protected $name;

 
  /** 
   * @ORM\Column(name="description")  
   */
  protected $description;
  
  /**
   * @ORM\Column(name="actif")   
   */
  protected $actif;

  function getId() {
      return $this->id;
  }

  function getName() {
      return $this->name;
  }

  function getDescription() {
      return $this->description;
  }

  function getActif() {
      return $this->actif;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setName($name) {
      $this->name = $name;
  }

  function setDescription($description) {
      $this->description = $description;
  }

  function setActif($actif) {
      $this->actif = $actif;
  }

  
}


 