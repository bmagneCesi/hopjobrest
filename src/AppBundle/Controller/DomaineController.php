<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Domaine;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;


class DomaineController extends Controller
{
	/**
     * Récupère l'ensemble des domaines
     * @Route("/domaines", name="domaines_list")
     * @Method({"GET"})
     */
    public function getDomainessAction(Request $request)
    {
		$domaines = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Domaine')
                ->findAll();

        if (empty($domaines)) {
            return new JsonResponse(['message' => 'Domaines not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [];
        foreach ($domaines as $domaine) {
            $formatted[] = [
               'id' => $domaine->getId(),
               'libelle' => $domaine->getLibelle(),       
            ];
        }
        return new JsonResponse($formatted);
    }
}
