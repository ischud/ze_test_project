<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="ili_table")
   */
  class IliEntity extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="generatedKey", type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(name="gn_lex_unit_id", type="integer")
     * @var int
     */
    protected $gn_lex_unit_id;

    /**
     * @ORM\Column(name="gn_old_sense", type="integer")
     * @var int
     */
    protected $gn_old_sense;

    /**
     * @ORM\Column(name="ewn_relation", type="integer")
     * @var int
     */
    protected $ewn_relation;

    /**
     * @ORM\Column(name="pwn_word", type="string")
     * @var str
     */
    protected $pwn_word;

    /**
     * @ORM\Column(name="pwn20_id", type="string")
     * @var str
     */
    protected $pwn20_id;

    /**
     * @ORM\Column(name="pwn30_id", type="string")
     * @var str
     */
    protected $pwn30_id;

    /**
     * @ORM\Column(name="source", type="string")
     * @var str
     */
    protected $source;

    /**
     * @ORM\Column(name="pwn20_paraphrase", type="string")
     * @var str
     */
    protected $pwn20_paraphrase;

  }