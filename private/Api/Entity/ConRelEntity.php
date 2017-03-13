<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="con_rel_table")
   */
  class ConRelEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="rel_type_id", type="integer")
     * @var int
     */
    protected $rel_type_id;

    /**
     * @ORM\Column(name="from_synset_id", type="integer")
     * @var int
     */
    protected $from_synset_id;

    /**
     * @ORM\Column(name="to_synset_id", type="integer")
     * @var int
     */
    protected $to_synset_id;

  }