<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="ili_pwn20_synonym_table")
   */
  class IliPwn20SynonymEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="generatedKey", type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(name="ili_id", type="integer")
     * @var int
     */
    protected $ili_id;

    /**
     * @ORM\Column(name="pwn20_synonym", type="string")
     * @var str
     */
    protected $pwn20_synonym;

  }