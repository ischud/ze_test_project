<?php

  namespace Api\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Api\Entity\AbstractEntity;

  /**
   * @ORM\Entity
   * @ORM\Table(name="synset_table")
   */
  class SynsetsEntity extends AbstractEntity {
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(name="word_class_id", type="integer")
     * @var int
     */
    protected $word_class_id;

//    /**
//     * @ORM\OneToOne(targetEntity="WordClassEntity", mappedBy="word_class")
//     * @ORM\JoinColumn(name="word_class_id", referencedColumnName="id")
//     */
//    protected $word_class;

    /**
     * @ORM\Column(name="word_category_id", type="integer")
     * @var int
     */
    protected $word_category_id;

    /**
     * @ORM\Column(name="paraphrase", type="string")
     * @var string
     */
    protected $paraphrase;

    /**
     * @ORM\Column(name="comment", type="string")
     * @var string
     */
    protected $comment;

    public function jsonSerialize() {
      return [
        'id'               => $this->id,
        'word_class_id'    => $this->word_class_id,
        //'word_class'       => $this->word_class->getColumn('word_class'),
        'word_category_id' => $this->word_category_id,
        'paraphrase'       => $this->paraphrase,
        'comment'          => $this->comment
      ];
    }

  }
