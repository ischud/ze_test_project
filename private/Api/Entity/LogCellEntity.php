<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="log_cell_table")
   */
  class LogCellEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="table_name", type="string")
     * @var string
     */
    protected $table_name;

    /**
     * @ORM\Column(name="cell_name", type="string")
     * @var string
     */
    protected $cell_name;

  }