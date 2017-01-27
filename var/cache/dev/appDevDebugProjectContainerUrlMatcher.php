<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/annonces')) {
                // annonces_list
                if ($pathinfo === '/annonces') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_annonces_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::getAnnoncesAction',  '_route' => 'annonces_list',);
                }
                not_annonces_list:

                // annonce_id
                if (preg_match('#^/annonces/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_annonce_id;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_id')), array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::getAnnonceByIdAction',));
                }
                not_annonce_id:

            }

            // app_annonce_postannonces
            if ($pathinfo === '/addannonces') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_annonce_postannonces;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::postAnnoncesAction',  '_route' => 'app_annonce_postannonces',);
            }
            not_app_annonce_postannonces:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // domaines_list
        if ($pathinfo === '/domaines') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_domaines_list;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DomaineController::getDomainessAction',  '_route' => 'domaines_list',);
        }
        not_domaines_list:

        if (0 === strpos($pathinfo, '/utilisateurs')) {
            // utilisateurs_list
            if ($pathinfo === '/utilisateurs') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateurs_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::getUtilisateursAction',  '_route' => 'utilisateurs_list',);
            }
            not_utilisateurs_list:

            // utilisateur_id
            if (preg_match('#^/utilisateurs/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_id')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::getUtilisateurByIdAction',));
            }
            not_utilisateur_id:

        }

        // attestation_id
        if (0 === strpos($pathinfo, '/documents') && preg_match('#^/documents/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_attestation_id;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'attestation_id')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::getUtilisateurByIdWithDocumentsAction',));
        }
        not_attestation_id:

        // factures_id
        if (0 === strpos($pathinfo, '/factures') && preg_match('#^/factures/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_factures_id;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'factures_id')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::getUtilisateurByIdWithFacturesAction',));
        }
        not_factures_id:

        if (0 === strpos($pathinfo, '/a')) {
            // attestations_id
            if (0 === strpos($pathinfo, '/attestations') && preg_match('#^/attestations/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attestations_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attestations_id')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::getUtilisateurByIdWithAttestationsAction',));
            }
            not_attestations_id:

            // app_utilisateur_postutilisateurs
            if ($pathinfo === '/addutilisateurs') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_utilisateur_postutilisateurs;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::postUtilisateursAction',  '_route' => 'app_utilisateur_postutilisateurs',);
            }
            not_app_utilisateur_postutilisateurs:

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // app_utilisateur_updateutilisateur
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_app_utilisateur_updateutilisateur;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_utilisateur_updateutilisateur')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::updateUtilisateurAction',));
            }
            not_app_utilisateur_updateutilisateur:

            // app_utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_app_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_utilisateur_delete')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_app_utilisateur_delete:

        }

        // id
        if (0 === strpos($pathinfo, '/missions') && preg_match('#^/missions/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_id;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'id')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::getMissionsByUserAction',));
        }
        not_id:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
