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
 * Class ChallengeController
 * @package App\Controller
 * @Route("/challenge")
 */
class ChallengeController extends AbstractController
{

    /**
     * @Route("/")
     * @Template
     */
	public function indexAction()
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






