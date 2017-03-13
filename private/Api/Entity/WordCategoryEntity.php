<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="word_category_table")
   */
  class WordCategoryEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="word_category", type="string")
     * @var string
     */
    protected $word_category;

  }