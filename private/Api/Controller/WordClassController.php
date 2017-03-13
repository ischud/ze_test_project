<?php

  namespace Api\Controller;

  use Doctrine\ORM\EntityManager;
  use Psr\Http\Message\ResponseInterface;
  use Psr\Http\Message\ServerRequestInterface;
  use Zend\Diactoros\Response\HtmlResponse;
  use Zend\Diactoros\Response\JsonResponse;

  class WordClassController {
    private $em;    // EntityManager

    public function __construct(
      EntityManager $em
    ) {
      $this->em = $em;
    }

    public function __invoke(
      ServerRequestInterface $request,
      ResponseInterface $response,
      callable $next = null
    ) {
      switch ($request->getAttribute('id','noId')) {
        // no ID given
        case 'noId':
          return $this->findAll($request, $response, $next);
        // has ID
        default:
          return $this->findId($request, $response, $next);
      }
    }

    public function findAll(
      $request,
      $response,
      $next
    ) {
      return new JsonResponse(
        $this->em->getRepository('Api\Entity\WordClassEntity')->findAll()
      );
    }


    public function findId(
      $request,
      $response,
      $next
    ) {
      return new JsonResponse(
        $this->em->getRepository('Api\Entity\WordClassEntity')->findBy(
          array('id' => intval($request->getAttribute('id')))
        )
      );
    }
  }