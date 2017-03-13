<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="id_generation_table")
   */
  class IdGenerationEntity extends AbstractEntity {

    /**
     * @ORM\Key
     * @ORM\Column(name="generatedKey", type="string")
     * @var str
     */
    protected $key;

    /**
     * @ORM\Column(name="generated_value", type="integer")
     * @var int
     */
    protected $value;

  }