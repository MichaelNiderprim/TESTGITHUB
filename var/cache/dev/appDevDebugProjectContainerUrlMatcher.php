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

        // user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // panier
        if ($pathinfo === '/panier') {
            return array (  '_controller' => 'UserBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
        }

        // address
        if ($pathinfo === '/address') {
            return array (  '_controller' => 'UserBundle\\Controller\\AddressController::addressAction',  '_route' => 'address',);
        }

        // livraison
        if ($pathinfo === '/livraison') {
            return array (  '_controller' => 'UserBundle\\Controller\\LivraisonController::livraisonAction',  '_route' => 'livraison',);
        }

        // infos
        if ($pathinfo === '/infos') {
            return array (  '_controller' => 'UserBundle\\Controller\\InfosController::infosAction',  '_route' => 'infos',);
        }

        // signin
        if ($pathinfo === '/signin') {
            return array (  '_controller' => 'UserBundle\\Controller\\SigninController::signinAction',  '_route' => 'signin',);
        }

        // pay
        if ($pathinfo === '/pay') {
            return array (  '_controller' => 'UserBundle\\Controller\\PayController::payAction',  '_route' => 'pay',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/article')) {
                    // addArticle
                    if ($pathinfo === '/admin/article /add') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::addAction',  '_route' => 'addArticle',);
                    }

                    // listArticles
                    if ($pathinfo === '/admin/articles') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::listAction',  '_route' => 'listArticles',);
                    }

                    // deleteArticle
                    if (0 === strpos($pathinfo, '/admin/article/delete') && preg_match('#^/admin/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteArticle')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::deleteAction',));
                    }

                }

                // adminPage
                if ($pathinfo === '/admin/admin') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'adminPage',);
                }

            }

            if (0 === strpos($pathinfo, '/article')) {
                // allArticles
                if ($pathinfo === '/articles') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::allAction',  '_route' => 'allArticles',);
                }

                // detailArticle
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailArticle')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::detailAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_default_about
        if (0 === strpos($pathinfo, '/about') && preg_match('#^/about(?:/(?P<id>\\d*))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_about')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',));
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            // login_check
            if ($pathinfo === '/admin/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/admin/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
