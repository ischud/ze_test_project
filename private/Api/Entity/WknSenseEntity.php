<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="wkn_sense_table")
   */
  class WknSenseEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;
    //private $id;

    /**
     * @ORM\Column(name="gn_lex_unit_id", type="integer")
     * @var int
     */
    protected $gn_lex_unit_id;

    /**
     * @ORM\Column(name="wkn_word_entry_id", type="integer")
     * @var int
     */
    protected $wkn_word_entry_id;

    /**
     * @ORM\Column(name="wkn_gloss", type="string")
     * @var str
     */
    protected $wkn_gloss;

    /**
     * @ORM\Column(name="wkn_gloss_edited", type="integer")
     * @var int
     */
    protected $wkn_gloss_edited;

  }