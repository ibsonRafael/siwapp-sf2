<?php

namespace Siwapp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Siwapp\CoreBundle\Entity\AbstractItem
 *
 * TODO: Custom methods
 *
 * @ORM\MappedSuperclass
 */
class AbstractItem
{
  /**
   * @var integer $id
   *
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var integer $quantity
   *
   * @ORM\Column(type="integer")
   */
  private $quantity;

  /**
   * @var decimal $discount
   *
   * @ORM\Column(type="decimal", scale="2")
   */
  private $discount;

  /** 
   * @var string $description 
   *
   * @ORM\Column()
   */
  private $description;

  /**
   * @var decimal $unitary_cost
   *
   * @ORM\Column(type="decimal")
   */
  private $unitary_cost;

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
   * Get quantity
   *
   * @return integer 
   */
  public function getQuantity()
  {
    return $this->quantity;
  }

  /**
   * Set Quantity
   *
   * @param integer $quantity
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  /**
   * Get discount
   *
   * @return decimal 
   */
  public function getDiscount()
  {
    return $this->discount;
  }

  /**
   * Set Discount
   *
   * @param decimal $discount
   */
  public function setDiscount($discount)
  {
    $this->discount = $discount;
  }

  /**
   * Get description
   *
   * @return string 
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set description
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * Get unitary cost
   *
   * @return decimal 
   */
  public function getUnitaryCost()
  {
    return $this->unitary_cost;
  }

  /**
   * Set unitary cost
   *
   * @param decimal $unitary_cost
   */
  public function setUnitaryCost($unitary_cost)
  {
    $this->unitary_cost = $unitary_cost;
  }

}