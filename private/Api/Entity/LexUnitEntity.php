<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="lex_unit_table")
   */
  class LexUnitEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="generatedKey", type="integer")
     * @var int
     */
    protected $id;
    /**
     * @ORM\Id
     * @ORM\Column(name="synset_id", type="integer")
     * @var int
     */
    protected $synset_id;

    /**
     * @ORM\Column(name="orth_form", type="string")
     * @var str
     */
    protected $orth_form;

    /**
     * @ORM\Column(name="source", type="string")
     * @var str
     */
    protected $source;

    /**
     * @ORM\Column(name="named_entity_type_id", type="integer")
     * @var int
     */
    protected $named_entity_type_id;

    /**
     * @ORM\Column(name="artificial", type="integer")
     * @var int
     */
    protected $artificial;

    /**
     * @ORM\Column(name="style_marking", type="integer")
     * @var int
     */
    protected $style_marking;

    /**
     * @ORM\Column(name="old_orth_form", type="string")
     * @var str
     */
    protected $old_orth_form;

    /**
     * @ORM\Column(name="old_orth_var", type="string")
     * @var str
     */
    protected $old_orth_var;

    /**
     * @ORM\Column(name="orth_var", type="string")
     * @var str
     */
    protected $orth_var;

    /**
     * @ORM\Column(name="comment", type="string")
     * @var str
     */
    protected $comment;

  }