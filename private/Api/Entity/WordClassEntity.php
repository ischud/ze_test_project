<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="word_class_table")
   */
  class WordClassEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="word_class", type="string")
     * @var string
     */
    protected $word_class;

  }