<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="lex_rel_type_table")
   */
  class LexRelTypeEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="generatedKey", type="integer")
     * @var int
     */
    protected $id;

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

  }