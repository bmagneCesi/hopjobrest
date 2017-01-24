<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Document;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;


class UtilisateurController extends Controller
{
	 /**
     * Récupère l'ensemble des utilisateurs
     * @Route("/utilisateurs", name="utilisateurs_list")
     * @Method({"GET"})
     */
    public function getUtilisateursAction(Request $request)
    {
		$users = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Utilisateur')
                ->findAll();

        if (empty($users)) {
            return new JsonResponse(['message' => 'Users not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [];
        foreach ($users as $user) {
            $formatted[] = [
               'idUtilisateur' => $user->getidUtilisateur(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite_id_civilite' => $user->getCiviliteIdCivilite(),
               'type_utilisateur_id_type_utilisateur' => $user->getTypeUtilisateurIdTypeUtilisateur(),
               'ville_id_ville' => $user->getVilleIdVille(),
               'metier_id_metier' => $user->getMetierIdMetier(),
               'domaine_id_domaine' => $user->getDomaineIdDomaine(),            ];
        }
        return new JsonResponse($formatted);
    }

    /**
     * Récupère un utilisateur par son id
     * @Route("/utilisateurs/{utilisateur_id}",requirements={"utilisateur_id" = "\d+"}, name="utilisateur_id")
     * @Method({"GET"})
     */
    public function getUtilisateurByIdAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Utilisateur')
                ->find($request->get('utilisateur_id'));

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'idUtilisateur' => $user->getidUtilisateur(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite_id_civilite' => $user->getCiviliteIdCivilite(),
               'type_utilisateur_id_type_utilisateur' => $user->getTypeUtilisateurIdTypeUtilisateur(),
               'ville_id_ville' => $user->getVilleIdVille(),
               'metier_id_metier' => $user->getMetierIdMetier(),
               'domaine_id_domaine' => $user->getDomaineIdDomaine(),
            ];

        return new JsonResponse($formatted);
    }

    /**
     * Récupère un utilisateur et ses documents par son id
     * @Route("documents/{idUtilisateur}",requirements={"idUtilisateur" = "\d+"}, name="idUtilisateur")
     * @Method({"GET"})
     */
    public function getUtilisateurByIdWithDocumentsAction($idUtilisateur,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('idUtilisateur' => $idUtilisateur ));
        $document = $em->getRepository("AppBundle:Document")->findOneBy(array('utilisateurUtilisateur' => $user ));
        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'idUtilisateur' => $user->getidUtilisateur(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite_id_civilite' => $user->getCiviliteIdCivilite(),
               'type_utilisateur_id_type_utilisateur' => $user->getTypeUtilisateurIdTypeUtilisateur(),
               'ville_id_ville' => $user->getVilleIdVille(),
               'metier_id_metier' => $user->getMetierIdMetier(),
               'domaine_id_domaine' => $user->getDomaineIdDomaine(),
               'libelle' => $document->getLibelle(),
               'repertoire' => $document->getRepertoire(),
               'date' => $document->getDate(),
               'iddocuments' => $document->getIdDocuments(),
            ];

        return new JsonResponse($formatted);
    }
  /**
     * Récupère un utilisateur et ses factures par son id
     * @Route("factures/{idUtilisateur}",requirements={"idUtilisateur" = "\d+"}, name="idUtilisateur")
     * @Method({"GET"})
     */
  public function getUtilisateurByIdWithFacturesAction($idUtilisateur,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('idUtilisateur' => $idUtilisateur ));
        $document = $em->getRepository("AppBundle:Document")->findOneBy(array('utilisateurUtilisateur' => $user, 'typeDocumentTypeDocument' => 1));
        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'idUtilisateur' => $user->getidUtilisateur(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite_id_civilite' => $user->getCiviliteIdCivilite(),
               'type_utilisateur_id_type_utilisateur' => $user->getTypeUtilisateurIdTypeUtilisateur(),
               'ville_id_ville' => $user->getVilleIdVille(),
               'metier_id_metier' => $user->getMetierIdMetier(),
               'domaine_id_domaine' => $user->getDomaineIdDomaine(),
               'libelle' => $document->getLibelle(),
               'repertoire' => $document->getRepertoire(),
               'date' => $document->getDate(),
               'iddocuments' => $document->getIdDocuments(),
            ];

        return new JsonResponse($formatted);
    }

    /**
     * Récupère un utilisateur et ses attesations par son id
     * @Route("attestations/{idUtilisateur}",requirements={"idUtilisateur" = "\d+"}, name="idUtilisateur")
     * @Method({"GET"})
     */
  public function getUtilisateurByIdWithAttestationsAction($idUtilisateur,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('idUtilisateur' => $idUtilisateur ));
        $document = $em->getRepository("AppBundle:Document")->findOneBy(array('utilisateurUtilisateur' => $user, 'typeDocumentTypeDocument' => 2));
        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted[] = [
               'idUtilisateur' => $user->getidUtilisateur(),
               'nom' => $user->getNom(),
               'prenom' => $user->getPrenom(),
               'mail' => $user->getMail(),
               'date_naissance' => $user->getDateNaissance(),
               'adresse' => $user->getAdresse(),
               'login' => $user->getLogin(),
               'password' => $user->getPassword(),
               'description' => $user->getDescription(),
               'moyenne_notation' => $user->getMoyenneNotation(),
               'civilite_id_civilite' => $user->getCiviliteIdCivilite(),
               'type_utilisateur_id_type_utilisateur' => $user->getTypeUtilisateurIdTypeUtilisateur(),
               'ville_id_ville' => $user->getVilleIdVille(),
               'metier_id_metier' => $user->getMetierIdMetier(),
               'domaine_id_domaine' => $user->getDomaineIdDomaine(),
               'libelle' => $document->getLibelle(),
               'repertoire' => $document->getRepertoire(),
               'date' => $document->getDate(),
               'iddocuments' => $document->getIdDocuments(),
            ];

        return new JsonResponse($formatted);
    }
  /**
  * Création d'un utilisateur
  * @Rest\View
  * @Rest\Post("/addutilisateurs")
  */
 public function postUtilisateursAction(Request $request)
 {
   $data = new Utilisateur;
   $idUtilisateur = $request->get('idUtilisateur');
   $nom = $request->get('nom');
   $prenom = $request->get('prenom');
   $mail = $request->get('mail');
   $dateNaissance = $request->get('dateNaissance');
   $adresse = $request->get('adresse');
   $login = $request->get('login');
   $password = $request->get('password');
   $description = $request->get('description');
   $moyenneNotation = $request->get('moyenneNotation');
   $civiliteIdCivilite = $request->get('civiliteIdCivilite');
   $typeUtilisateurIdTypeUtilisateur = $request->get('typeUtilisateurIdTypeUtilisateur');
   $villeIdVille = $request->get('villeIdVille');
   $metierIdMetier = $request->get('metierIdMetier');
   $domaineIdDomaine = $request->get('domaineIdDomaine');

  $data->setNom($nom);
  $data->setPrenom($prenom);
  $data->setMail($mail);
  $data->setDateNaissance(new \DateTime());
  $data->setAdresse($adresse);
  $data->setLogin($login);
  $data->setPassword($password);
  $data->setDescription($description);
  $data->setMoyenneNotation($moyenneNotation);
  $data->setCiviliteIdCivilite($civiliteIdCivilite);
  $data->setTypeUtilisateurIdTypeUtilisateur($typeUtilisateurIdTypeUtilisateur);
  $data->setVilleIdVille($villeIdVille);
  $data->setMetierIdMetier($metierIdMetier);
  $data->setDomaineIdDomaine($domaineIdDomaine);
  $em = $this->getDoctrine()->getManager();
  $em->persist($data);
  $em->flush();

    return new View("User Added Successfully", Response::HTTP_OK);
 }

/**
 * Modification d'un utilisateur
 * @Rest\Put("/utilisateur/{idUtilisateur}")
 */
 public function updateUtilisateurAction($idUtilisateur,Request $request)
 { 
   $data = new Utilisateur;
   $nom = $request->get('nom');
   $prenom = $request->get('prenom');
   $mail = $request->get('mail');
   $dateNaissance = $request->get('dateNaissance');
   $adresse = $request->get('adresse');
   $login = $request->get('login');
   $password = $request->get('password');
   $description = $request->get('description');
   $moyenneNotation = $request->get('moyenneNotation');
   $civiliteIdCivilite = $request->get('civiliteIdCivilite');
   $typeUtilisateurIdTypeUtilisateur = $request->get('typeUtilisateurIdTypeUtilisateur');
   $villeIdVille = $request->get('villeIdVille');
   $metierIdMetier = $request->get('metierIdMetier');
   $domaineIdDomaine = $request->get('domaineIdDomaine');
   $sn = $this->getDoctrine()->getManager();
   $utilisateur = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($idUtilisateur);
if (empty($utilisateur)) {
   return new View("user not found", Response::HTTP_NOT_FOUND);
 } 
else{
  $utilisateur->setNom($nom);
  $utilisateur->setPrenom($prenom);
  $utilisateur->setMail($mail);
  $utilisateur->setDateNaissance(new \DateTime());
  $utilisateur->setAdresse($adresse);
  $utilisateur->setLogin($login);
  $utilisateur->setPassword($password);
  $utilisateur->setDescription($description);
  $utilisateur->setMoyenneNotation($moyenneNotation);
  $utilisateur->setCiviliteIdCivilite($civiliteIdCivilite);
  $utilisateur->setTypeUtilisateurIdTypeUtilisateur($typeUtilisateurIdTypeUtilisateur);
  $utilisateur->setVilleIdVille($villeIdVille);
  $utilisateur->setMetierIdMetier($metierIdMetier);
  $utilisateur->setDomaineIdDomaine($domaineIdDomaine);
  $sn->flush();
   return new View("User Updated Successfully", Response::HTTP_OK);
 }
}

 /**
 * Suppression d'un utilisateur
 * @Rest\Delete("/utilisateur/{idUtilisateur}")
 */
 public function deleteAction($idUtilisateur)
 {
  $data = new Utilisateur;
  $sn = $this->getDoctrine()->getManager();
  $utilisateur = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($idUtilisateur);
if (empty($utilisateur)) {
  return new View("utilisateur not found", Response::HTTP_NOT_FOUND);
 }
 else {
  $sn->remove($utilisateur);
  $sn->flush();
 }
  return new View("deleted successfully", Response::HTTP_OK);
 }

 /**
     * Recuperer toutes les missions, annonces qu'un utilisateur va devoir réaliser
     * @Route("missions/{idUtilisateur}",requirements={"idUtilisateur" = "\d+"}, name="idUtilisateur")
     * @Method({"GET"})
     */
    public function getMissionsByUserAction($idUtilisateur,Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $utilisateur = $em->getRepository("AppBundle:Utilisateur")->findOneBy(array('idUtilisateur' => $idUtilisateur ));
        $annonce = $em->getRepository("AppBundle:Annonce")->findOneBy(array('idAnnonce' => $utilisateur ));
        $reponse = $em->getRepository("AppBundle:ReponseAnnonce")->findOneBy(array('idReponseAnnonce' => $annonce ));

        if (empty($reponse)) {
            return new JsonResponse(['message' => 'Missions not found'], Response::HTTP_NOT_FOUND);
        }
            $formatted[] = [
               'idUtilisateur' => $utilisateur->getIdUtilisateur(),
               'nom' => $utilisateur->getNom(),
               'prenom' => $utilisateur->getPrenom(),
               'mail' => $utilisateur->getMail(),
               'dateNaissance' => $utilisateur->getDateNaissance(),
               'adresse' => $utilisateur->getAdresse(),
               'login' => $utilisateur->getLogin(),
               'description' => $utilisateur->getDescription(),
               'moyenneNotation' => $utilisateur->getMoyenneNotation(),
               'civiliteIdCivilite' => $utilisateur->getCiviliteIdCivilite(),
               'typeUtilisateurIdTypeUtilisateur' => $utilisateur->getTypeUtilisateurIdTypeUtilisateur(),
               'villeIdVille' => $utilisateur->getVilleIdVille(),
               'metierIdMetier' => $utilisateur->getMetierIdMetier(),
               'domaineIdDomaine' => $utilisateur->getDomaineIdDomaine(),
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
               'code' => $reponse->getCode(),
               'commentaire' => $reponse->getCommentaire(),
               'idReponseAnnonce' => $reponse->getIdReponseAnnonce(),
               'statutPaiement' => $reponse->getStatutPaiement(),
               'validation' => $reponse->getValidation(),
               'annonceIdAnnonce' => $reponse->getAnnonceIdAnnonce(),
               'utilisateurIdUtilisateur' => $reponse->getUtilisateurIdUtilisateur(),
               'utilisateurIdUtilisateur1' => $reponse->getUtilisateurIdUtilisateur1(),

                      
            ];
        
        return new JsonResponse($formatted);
    }

}
