<?php

// src/Controller/DashboardController.php

namespace App\Controller;

use App\Service\ApplicationService;
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
	public function indexAction(CommonGroundService $commonGroundService, ApplicationService $applicationService)
	{
	    $variables = $applicationService->getVariables();
		// Moeten we ophalen uit de ingelogde sessie
		$person = $variables['user']['burgerservicenummer'];
		$defaultIrc = "https://irc.huwelijksplanner.online/assents/";

		$variables['assents'] = $commonGroundService->getResourceList($defaultIrc, ['person'=>$person]);

		return $variables;
	}

	/**
	 * @Route("/{id}")
	 * @Template
	 */
	public function viewAction($id, CommonGroundService $commonGroundService, ApplicationService $applicationService)
	{
	    $variables = $applicationService->getVariables();

//	    var_dump($variables);
//	    die;
		// We need need to get the assssent from a differend than standard location

		$defaultIrc = "https://irc.huwelijksplanner.online/assents/";

		// test assent 00c38d4d-f140-489f-bf92-c7a45d826b88
		$variables['assent'] = $commonGroundService->getResource($defaultIrc . $id);

		return $variables;
	}
}






