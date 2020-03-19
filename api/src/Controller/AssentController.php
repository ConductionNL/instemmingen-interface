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
 * @Route("/assents")
 */
class AssentController extends AbstractController
{	
	
	/**
	 * @Route("/")
	 * @Template
	 */
	public function indexAction()
	{		
		// Moeten we ophalen uit de ingelogde sessie
		$person = ''; 
		$defaultIrc = "https://irc.huwelijksplanner.online/assents/";
		
		$assents = $commonGroundService->getResourceList($defaultIrc, ['person'->$person]);
				
		return ['assents'=>$assents];
	}
		
	/**
	 * @Route("/{id}")
	 * @Template
	 */
	public function viewAction($id, CommonGroundService $commonGroundService)
	{
		// We need need to get the assssent from a differend than standard location
		
		$defaultIrc = "https://irc.huwelijksplanner.online/assents/";
		
		// test assent 00c38d4d-f140-489f-bf92-c7a45d826b88
		$assent = $commonGroundService->getResource($defaultIrc . $id);
				
		return ['assent'=>$assent];
	}
}






