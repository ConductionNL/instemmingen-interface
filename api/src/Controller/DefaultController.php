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
 * @Route("/")
 */
class DefaultController extends AbstractController
{	
	
	/**
	 * @Route("/")
	 * @Template
	 */
	public function indexAction(Request $request, CommonGroundService $commonGroundService)
	{
		$token = $request->query->get('token');
		$responceUrl = $request->query->get('responceUrl');
		$brpUrl = $request->query->get('brpUrl');
		$url = $request->getHost();
		
		if(!$brpUrl){
			$brpUrl = str_replace(['ds.','digispoof.'],'brp.',$url);
		}
		
		if($brpUrl == 'localhost'){
			$brpUrl = "https://brp.dev.huwelijksplanner.online";
		}
		
		$brpUrl = "https://brp.huwelijksplanner.online";
		
		$people = $commonGroundService->getResourceList($brpUrl.'/ingeschrevenpersonen');
		
		
		return ['people'=>$people, 'responceUrl' => $responceUrl, 'token' => $token];
	}
	
}






