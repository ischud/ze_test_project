<?php

  namespace Api\Controller;

  use Doctrine\ORM\EntityManager;
  use Psr\Http\Message\ResponseInterface;
  use Psr\Http\Message\ServerRequestInterface;
  use Zend\Diactoros\Response\HtmlResponse;
  use Zend\Diactoros\Response\JsonResponse;
  use Zend\Validator\File\NotExists;
  use Doctrine\Common\Persistence\Mapping;
  use Api\Controller\WordClassController;

  class EntityController {
    private $em;
    private $requestEntityName = null;
    private $entity = null;

    public function __construct(
        EntityManager $em
    ) {
      /*
       * $this->em (methods) (
       *   [0] => getConnection               [14] => flush                   [28] => contains
       *   [1] => getMetadataFactory          [15] => find                    [29] => getEventManager
       *   [2] => getExpressionBuilder        [16] => getReference            [30] => getConfiguration
       *   [3] => beginTransaction            [17] => getPartialReference     [31] => isOpen
       *   [4] => getCache                    [18] => clear                   [32] => getUnitOfWork
       *   [5] => transactional               [19] => close                   [33] => getHydrator
       *   [6] => commit                      [20] => persist                 [34] => newHydrator
       *   [7] => rollback                    [21] => remove                  [35] => getProxyFactory
       *   [8] => getClassMetadata            [22] => refresh                 [36] => initializeObject
       *   [9] => createQuery                 [23] => detach                  [37] => create
       *   [10] => createNamedQuery           [24] => merge                   [38] => getFilters
       *   [11] => createNativeQuery          [25] => copy                    [39] => isFiltersStateClean
       *   [12] => createNamedNativeQuery     [26] => lock                    [40] => hasFilters
       *   [13] => createQueryBuilder         [27] => getRepository
       * )
       */
      $this->em = $em;
    }


    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        callable $next = null
    ) {
      $this->requestEntityName = $request->getAttribute('entity');

      if($this->checkRepository($this->requestEntityName) == false)
        return new JsonResponse([
          'success' => false,
          'code'    => 000,
          'message' => 'requested non existing entity'
        ]);

      $q['query']  = (isset($_GET['q'])      && is_array($_GET['q']))        ? $_GET['q']              : [];
      //$q['order']  = (isset($_GET['order'])  && $_GET['order'] == 'DESC')    ? 'DESC'                  : 'ASC';
      $q['limit']  = (isset($_GET['limit'])  && intval($_GET['limit']) > 0)  ? intval($_GET['limit'])  : 30;
      $q['offset'] = (isset($_GET['offset']) && intval($_GET['offset']) > 0) ? intval($_GET['offset']) : 0;
      $sort        = (isset($_GET['sort']) && (preg_match('/^[-a-zA-Z0-9 .,-_]+$/',$_GET['sort']) == 1)) ? explode(',',$_GET['sort']) : NULL;

      $id = $request->getAttribute('id','noId');

      switch ($id) {
        // no ID given
        case 'noId':
          //return $this->findAll($request, $response, $next);
          return $this->abstractFindDql($q,$sort);
        // has ID
        default:
          $q['query'] = ['id' => intval($id)];
          //return $this->findId($request, $response, $next);
          return $this->abstractFindDql($q);
      }
    }


    private function checkRepository($entityName) {
      if($this->entity === null) {
        try {
          $this->entity = $this->em->getRepository('Api\Entity\\'.$entityName.'Entity');
          $return = true;
        } catch(Mapping\MappingException $e) {
          $return = false;
        }
      }
      return $return;
    }


    public function findAll($request,$response,$next) {
      if(1000 < count($this->entity->findAll()))
        return new JsonResponse([
          'success' => false,
          'message' => 'requested to much datasets'
        ]);
      else
        var_dump($_GET);
        $criteria = [];
        $orderBy  = NULL;
        $limit    = 10;
        $offset   = 5;
        return new JsonResponse(
          //$this->entity->findAll()
          $this->entity->findBy($criteria,$orderBy,$limit,$offset)
        );
    }


    public function findBy($request,$response,$next) {
      if(1000 < count($this->entity->findAll()))
        return new JsonResponse([
          'success' => false,
          'message' => 'requested to much datasets'
        ]);
      else
        return new JsonResponse(
          $this->entity->findAll()
        );
    }


    public function findId($request,$response,$next) {
      return new JsonResponse(
        $this->entity->findBy(
          array('id' => intval($request->getAttribute('id')))
        )
      );
    }

    public function abstractFindDql($q=NULL,$sort=NULL) {
      $qb = $this->em->createQueryBuilder();
      $qb->select('e')
         ->from('Api\Entity\\'.$this->requestEntityName.'Entity', 'e')
         ->setFirstResult($q['offset'])
         ->setMaxResults($q['limit'])
      ;

      // where
      foreach ($q['query'] as $key => $value) {
        $value = (is_numeric($value)) ? $value : ("'".$value."'");
        $qb->andWhere('e.'.$key.' = '.$value);
      }

      // orderBy
      if(is_array($sort)) {
        foreach ($sort as $value) {
          if(substr($value,0,1) == '-')
            $qb->addOrderBy('e.'.substr($value, 1), 'DESC');
          else
            $qb->addOrderBy('e.'.$value, 'ASC');
        }
      }

      //$result = $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_SCALAR);
      //var_dump($qb->getQuery()->getDQL());
      //die;

      $result = $qb->getQuery()->getResult();

      return new JsonResponse($result);
    }

  }