<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // hotel_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'HotelBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hotel_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_hotel_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'hotel_homepage'));
            }

            return $ret;
        }
        not_hotel_homepage:

        // alomed_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::indexAction',  '_route' => 'alomed_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_alomed_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'alomed_homepage'));
            }

            return $ret;
        }
        not_alomed_homepage:

        // alomed_about
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::indexaboutAction',  '_route' => 'alomed_about',);
        }

        // alomed_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::indexcontactAction',  '_route' => 'alomed_contact',);
        }

        // alomed_role
        if ('/role' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::indexroleAction',  '_route' => 'alomed_role',);
        }

        // rechercher_homepage
        if ('/rech' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::rechrercherAction',  '_route' => 'rechercher_homepage',);
        }

        // about_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_about_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'about_homepage'));
            }

            return $ret;
        }
        not_about_homepage:

        // role_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::roleAction',  '_route' => 'role_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_role_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'role_homepage'));
            }

            return $ret;
        }
        not_role_homepage:

        // contact_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'alomedBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_contact_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contact_homepage'));
            }

            return $ret;
        }
        not_contact_homepage:

        if (0 === strpos($pathinfo, '/in')) {
            // index_homepage
            if ('/index' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::showalllivreurAction',  '_route' => 'index_homepage',);
            }

            // pharmacie_index
            if ('/in' === $pathinfo) {
                $ret = array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::indexAction',  '_route' => 'pharmacie_index',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_pharmacie_index;
                }

                return $ret;
            }
            not_pharmacie_index:

        }

        elseif (0 === strpos($pathinfo, '/livreur')) {
            // create_homepage
            if ('/livreur' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::createlivreurAction',  '_route' => 'create_homepage',);
            }

            // view_homepage
            if (preg_match('#^/livreur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_homepage']), array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::getlivreurbyidAction',));
            }

        }

        // update_homepage
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_homepage']), array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::updatelivreurAction',));
        }

        // delete_homepage
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_homepage']), array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::deletelivreurAction',));
        }

        // pharmacie_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'pharmacie_show']), array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::showAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_pharmacie_show;
            }

            return $ret;
        }
        not_pharmacie_show:

        // pharmacie_new
        if ('/new' === $pathinfo) {
            $ret = array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::newAction',  '_route' => 'pharmacie_new',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_pharmacie_new;
            }

            return $ret;
        }
        not_pharmacie_new:

        // pharmacie_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'pharmacie_edit']), array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::editAction',));
        }

        // pharmacie_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'pharmacie_delete']), array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::deleteAction',));
            if (!in_array($requestMethod, ['DELETE'])) {
                $allow = array_merge($allow, ['DELETE']);
                goto not_pharmacie_delete;
            }

            return $ret;
        }
        not_pharmacie_delete:

        if (0 === strpos($pathinfo, '/in')) {
            // index_medecinhomepage
            if ('/indexmedecin' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\MedecinController::showallmedecinAction',  '_route' => 'index_medecinhomepage',);
            }

            // index_patienthomepage
            if ('/indexpatient' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\PatientController::showallpatientAction',  '_route' => 'index_patienthomepage',);
            }

            if (0 === strpos($pathinfo, '/interface')) {
                // medecin_interface
                if ('/interfacemedecin' === $pathinfo) {
                    return array (  '_controller' => 'alomedBundle\\Controller\\MedecinController::showallordennanceAction',  '_route' => 'medecin_interface',);
                }

                // pharmacie_interface
                if ('/interfacepharmacie' === $pathinfo) {
                    return array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::showallordennancephAction',  '_route' => 'pharmacie_interface',);
                }

                // patient_interface
                if ('/interfacepatient' === $pathinfo) {
                    return array (  '_controller' => 'alomedBundle\\Controller\\PatientController::showalllivraisonAction',  '_route' => 'patient_interface',);
                }

                // livreur_interface
                if ('/interfacelivreur' === $pathinfo) {
                    return array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::showalllivraisonAction',  '_route' => 'livreur_interface',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/medecin')) {
            // create_medecinhomepage
            if ('/medecin' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\MedecinController::createmedecinAction',  '_route' => 'create_medecinhomepage',);
            }

            // view_homepagemedecin
            if (preg_match('#^/medecin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_homepagemedecin']), array (  '_controller' => 'alomedBundle\\Controller\\MedecinController::getmedecinbyidAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/de')) {
            // delete_homepagemedecin
            if (0 === strpos($pathinfo, '/deletemedecin') && preg_match('#^/deletemedecin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_homepagemedecin']), array (  '_controller' => 'alomedBundle\\Controller\\MedecinController::deletemedecinAction',));
            }

            // delete_homepagepatient
            if (0 === strpos($pathinfo, '/deletepatient') && preg_match('#^/deletepatient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_homepagepatient']), array (  '_controller' => 'alomedBundle\\Controller\\PatientController::deletepatientAction',));
            }

            // deco_interface
            if ('/deconcter' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\PatientController::deconctionAction',  '_route' => 'deco_interface',);
            }

        }

        // update_homepagemedecin
        if (0 === strpos($pathinfo, '/updatemedecin') && preg_match('#^/updatemedecin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_homepagemedecin']), array (  '_controller' => 'alomedBundle\\Controller\\MedecinController::updatemedecinAction',));
        }

        // update_homepagepatient
        if (0 === strpos($pathinfo, '/updatepatient') && preg_match('#^/updatepatient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_homepagepatient']), array (  '_controller' => 'alomedBundle\\Controller\\PatientController::updatepatientAction',));
        }

        if (0 === strpos($pathinfo, '/patient')) {
            // create_patienthomepage
            if ('/patient' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\PatientController::createpatientAction',  '_route' => 'create_patienthomepage',);
            }

            // view_patienthomepage
            if (preg_match('#^/patient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_patienthomepage']), array (  '_controller' => 'alomedBundle\\Controller\\PatientController::getpatientbyidAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/li')) {
            // view_patientlistelivraison
            if ('/listelivraison' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\PharmacieController::showalllivraisonphAction',  '_route' => 'view_patientlistelivraison',);
            }

            // view_livraison
            if (0 === strpos($pathinfo, '/livraisonview') && preg_match('#^/livraisonview/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_livraison']), array (  '_controller' => 'alomedBundle\\Controller\\PatientController::getlivraisonbyidAction',));
            }

            // confirmer_livraison
            if (0 === strpos($pathinfo, '/livraisonconfirmer') && preg_match('#^/livraisonconfirmer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'confirmer_livraison']), array (  '_controller' => 'alomedBundle\\Controller\\PatientController::livrerAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // security_login2
            if ('/login2' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\SecuritypatientController::verifpatientAction',  '_route' => 'security_login2',);
            }

            // security_login4
            if ('/login4' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\SecuritypatientController::veriflivreurAction',  '_route' => 'security_login4',);
            }

            // security_login1
            if ('/login1' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\SecuritypatientController::verifadminmeAction',  '_route' => 'security_login1',);
            }

            // security_login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\SecuritypatientController::medecinverifAction',  '_route' => 'security_login',);
            }

            // security_login3
            if ('/login3' === $pathinfo) {
                return array (  '_controller' => 'alomedBundle\\Controller\\SecuritypatientController::phverfifAction',  '_route' => 'security_login3',);
            }

        }

        // creation
        if ('/ordennance' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\ordennanceController::creationAction',  '_route' => 'creation',);
        }

        // createlivraison
        if ('/createlivraison' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\livraisonController::createlivraisonAction',  '_route' => 'createlivraison',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
