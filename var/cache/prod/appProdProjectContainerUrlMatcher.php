<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // ndex_homepage
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'alomedBundle\\Controller\\LivreurController::showalllivreurAction',  '_route' => 'ndex_homepage',);
        }

        if (0 === strpos($pathinfo, '/livreur')) {
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
