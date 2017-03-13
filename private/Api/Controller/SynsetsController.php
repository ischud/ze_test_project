<?php

  namespace Api\Controller;

  use Doctrine\ORM\EntityManager;
  use Psr\Http\Message\ResponseInterface;
  use Psr\Http\Message\ServerRequestInterface;
  use Zend\Diactoros\Response\HtmlResponse;
  use Zend\Diactoros\Response\JsonResponse;

  class SynsetsController {
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
          return $this->index($request, $response, $next);
        // has ID
        default:
          return $this->hasId($request, $response, $next);
      }
    }

    public function index(
      $request,
      $response,
      $next
    ) {
      return new JsonResponse([
        'controller' => 'SynsetsController',
        'action'     => 'index',
        'message'    => 'no ID given'
      ]);
    }

    public function hasId(
      $request,
      $response,
      $next
    ) {

      // short version
      return new JsonResponse(
        $this->em->getRepository('Api\Entity\SynsetsEntity')->findBy(
          array('id' => intval($request->getAttribute('id')))
        )
      );
    }
  }