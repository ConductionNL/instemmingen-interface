<?php

// src/Controller/DashboardController.php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Service\CommonGroundService;

/**
 * Class DeveloperController
 * @package App\Controller
 * @Route("/developer")
 */
class DeveloperController extends AbstractController
{	
	
	/**
	 * @Route("/")
	 * @Template
	 */
	public function dashboardAction()
	{
		return [];
	}
	
    /**
     * @Route("/all")
     * @Template
     */
	public function indexAction()
    {
    	return [];
	}
	
	/**
	 * @Route("/me")
	 * @Template
	 */
	public function meAction()
	{
		return [];
	}
	
	/**
	 * @Route("/toolkit")
	 * @Template
	 */
	public function toolkitAction()
	{
		return [];
	}
	
	/**
	 * @Route("/{id}")
	 * @Template
	 */
	public function viewAction($id)
	{
		return [];
	}
}






