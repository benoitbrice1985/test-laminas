<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Entity\Album;

class IndexController extends AbstractActionController
{
    private $_entityManager;
    
    /**
     * Constructor is used for injecting dependencies into the controller.
     */
    public function __construct($entityManager) 
    { 
        $this->_entityManager = $entityManager;
    }

    public function indexAction()
    {
      
        $article = new Album();
        $article->setName('test');
        $article->setDescription('blablablablbalb');
        $article->setActif(1);
        
        $this->_entityManager->persist($article);
        $this->_entityManager->flush();
        
        return new ViewModel();
    }
}
