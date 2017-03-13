<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="compound_table")
   */
  class CompoundEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="comp_property", type="integer")
     * @var int
     */
    protected $comp_property;

    /**
     * @ORM\Column(name="comp_lex_unit_id", type="integer")
     * @var int
     */
    protected $comp_lex_unit_id;

    /**
     * @ORM\Column(name="mod1_property", type="integer")
     * @var int
     */
    protected $mod1_property;

    /**
     * @ORM\Column(name="mod1_category", type="integer")
     * @var int
     */
    protected $mod1_category;

    /**
     * @ORM\Column(name="modifier1", type="string")
     * @var str
     */
    protected $modifier1;

    /**
     * @ORM\Column(name="mod1_lex_unit_id", type="integer")
     * @var int
     */
    protected $mod1_lex_unit_id;

    /**
     * @ORM\Column(name="mod2_category", type="integer")
     * @var int
     */
    protected $mod2_category;

    /**
     * @ORM\Column(name="modifier2", type="string")
     * @var str
     */
    protected $modifier2;

    /**
     * @ORM\Column(name="mod2_lex_unit_id", type="integer")
     * @var int
     */
    protected $mod2_lex_unit_id;

    /**
     * @ORM\Column(name="head_property", type="integer")
     * @var int
     */
    protected $head_property;

    /**
     * @ORM\Column(name="head", type="string")
     * @var str
     */
    protected $head;

    /**
     * @ORM\Column(name="head_lex_unit_id", type="integer")
     * @var int
     */
    protected $head_lex_unit_id;

    /**
     * @ORM\Column(name="mod2_property", type="integer")
     * @var int
     */
    protected $mod2_property;

  }