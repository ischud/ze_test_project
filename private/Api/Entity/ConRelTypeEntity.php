<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="con_rel_type_table")
   */
  class ConRelTypeEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="name", type="string")
     * @var str
     */
    protected $name;

    /**
     * @ORM\Column(name="direction", type="string")
     * @var str
     */
    protected $direction;

    /**
     * @ORM\Column(name="inverse", type="string")
     * @var str
     */
    protected $inverse;

    /**
     * @ORM\Column(name="transitive", type="integer")
     * @var int
     */
    protected $transitive;

  }