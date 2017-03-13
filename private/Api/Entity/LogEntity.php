<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="log_table")
   */
  class LogEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="modifier", type="string")
     * @var str
     */
    protected $modifier;

    /**
     * @ORM\Column(name="mod_time", type="string")
     * @var str
     */
    protected $mod_time;

    /**
     * @ORM\Column(name="modified_cell", type="integer")
     * @var int
     */
    protected $modified_cell;

    /**
     * @ORM\Column(name="modified_object_id", type="integer")
     * @var int
     */
    protected $modified_object_id;

    /**
     * @ORM\Column(name="old_value", type="string")
     * @var str
     */
    protected $old_value;

    /**
     * @ORM\Column(name="new_value", type="string")
     * @var str
     */
    protected $new_value;

  }