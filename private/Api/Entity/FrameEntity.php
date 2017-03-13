<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="frame_table")
   */
  class FrameEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="lex_unit_id", type="integer")
     * @var int
     */
    protected $lex_unit_id;

    /**
     * @ORM\Column(name="frame_type_id", type="integer")
     * @var int
     */
    protected $frame_type_id;

  }