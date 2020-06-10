<?php

// src/Controller/DashboardController.php

namespace App\Controller;

use App\Service\ApplicationService;
//use App\Service\RequestService;
use Conduction\CommonGroundBundle\Service\CommonGroundService;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class DeveloperController
 * @package App\Controller
 * @Route("/")
 */
class DefaultController extends AbstractController
{

	/**
	 * @Route("/")
	 * @Template
	 */
    public function indexAction(Session $session, $slug = false, Request $httpRequest, CommonGroundService $commonGroundService, ApplicationService $applicationService)
    {
        $variables = $applicationService->getVariables();

        return $variables;
    }

}






