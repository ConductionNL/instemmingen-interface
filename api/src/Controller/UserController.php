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
 */
class UserController extends AbstractController
{

	/**
	 * @Route("/login")
	 * @Template
	 */
	public function loginAction()
	{
		return [];
	}

    /**
     * @Route("/logout")
     * @Template
     */
    public function logoutAction(Session $session)
    {
        $session->set('requestType', false);
        $session->set('request', false);
        $session->set('user', false);
        $session->set('employee', false);
        $session->set('contact', false);

        $this->addFlash('info', 'U bent uitgelogd');
        return $this->redirect($this->generateUrl('app_default_index'));
    }


}






