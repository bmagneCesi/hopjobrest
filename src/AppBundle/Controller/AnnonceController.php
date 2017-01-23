<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Annonce;
use AppBundle\Entity\Ville;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\TypeVehicule;
use AppBundle\Entity\Horaire;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;

class AnnonceController extends Controller
{


	 /**
     * Récupère l'ensemble des annonces
     * @Route("/annonces", name="annonces_list")
     * @Method({"GET"})
     */
    public function getAnnoncesAction(Request $request)
    {
		$annonces = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Annonce')
                ->findAll();

        if (empty($annonces)) {
            return new JsonResponse(['message' => 'Annonces not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [];
        foreach ($annonces as $annonce) {
            $formatted[] = [
               'idAnnonce' => $annonce->getIdAnnonce(),
               'titre' => $annonce->getTitre(),
               'nbPersonnes' => $annonce->getNbPersonnes(),
               'vehicule' => $annonce->getVehicule(),
               'dateFixe' => $annonce->getDateFixe(),
               'dateLimite' => $annonce->getDateLimite(),
               'prixTotal' => $annonce->getPrixTotal(),
               'telephone' => $annonce->getTelephone(),
               'villeVille' => $annonce->getVilleVille()->getIdVille(),
               'utilisateurUtilisateur' => $annonce->getUtilisateurUtilisateur()->getIdUtilisateur(),
               'typeVehiculeTypeVehicule' => $annonce->getTypeVehiculeTypeVehicule()->getIdTypeVehicule(),
               'horaireHoraire' => $annonce->getHoraireHoraire()->getIdHoraire(),        
            ];
        }
        return new JsonResponse($formatted);
    }

     /**
     * Récupère une annonce par son id
     * @Route("/annonces/{annonce_id}",requirements={"annonce_id" = "\d+"}, name="annonce_id")
     * @Method({"GET"})
     */
    public function getAnnonceByIdAction(Request $request)
    {
        $annonce = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Annonce')
                ->find($request->get('annonce_id'));

        if (empty($annonce)) {
            return new JsonResponse(['message' => 'Annonce not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'idAnnonce' => $annonce->getIdAnnonce(),
               'titre' => $annonce->getTitre(),
               'nbPersonnes' => $annonce->getNbPersonnes(),
               'vehicule' => $annonce->getVehicule(),
               'dateFixe' => $annonce->getDateFixe(),
               'dateLimite' => $annonce->getDateLimite(),
               'prixTotal' => $annonce->getPrixTotal(),
               'telephone' => $annonce->getTelephone(),
               'villeVille' => $annonce->getVilleVille()->getIdVille(),
               'utilisateurUtilisateur' => $annonce->getUtilisateurUtilisateur()->getIdUtilisateur(),
               'typeVehiculeTypeVehicule' => $annonce->getTypeVehiculeTypeVehicule()->getIdTypeVehicule(),
               'horaireHoraire' => $annonce->getHoraireHoraire()->getIdHoraire(),        
            ];

        return new JsonResponse($formatted);
    }

      /**
  * Création d'une annonce
  * @Rest\View
  * @Rest\Post("/addannonces")
  */
 public function postAnnoncesAction(Request $request)
 {
  $em = $this->getDoctrine()->getManager();

   $ville = new Ville;
   $utilisateur = new Utilisateur;
   $horaire = new Horaire;
   $typeVehicule = new TypeVehicule;
   $data = new Annonce;
   $data->setVilleVille(1);
   $idAnnonce = $request->get('idAnnonce');
   $titre = $request->get('titre');
   $nbPersonnes = $request->get('nbPersonnes');
   $vehicule = $request->get('vehicule');
   $dateFixe = $request->get('dateFixe');
   $dateLimite = $request->get('dateLimite');
   $prixTotal = $request->get('prixTotal');
   $telephone = $request->get('telephone');
   $description = $request->get('description');
   $villeVille = $request->get('villeVille');
   $utilisateurUtilisateur = $request->get('utilisateurUtilisateur');
   $typeVehiculeTypeVehicule = $request->get('typeVehiculeTypeVehicule');
   $horaireHoraire = $request->get('horaireHoraire');

  $data->setTitre($titre);
  $data->setNbPersonnes($nbPersonnes);
  $data->setVehicule($vehicule);
  $data->setDateFixe($dateFixe);
  $data->setDateLimite(new \DateTime());
  $data->setPrixTotal($prixTotal);
  $data->setTelephone($telephone);
  $data->setDescription($description);
  $data->setVilleVille($ville);
  $data->setUtilisateurUtilisateur($utilisateur);
  $data->setTypeVehiculeTypeVehicule($typeVehicule);
  $data->setHoraireHoraire($horaire);
  $em->persist($ville);
  $em->persist($utilisateur);
  $em->persist($horaire);
  $em->persist($typeVehicule);
  $em->persist($data);
  $em->flush();

    return new View("Annonce Added Successfully", Response::HTTP_OK);
 }
}
