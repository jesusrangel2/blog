<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // BloggerBlogBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'BloggerBlogBundle_homepage');
            }
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BloggerBlogBundle_homepage',);
        }
        not_BloggerBlogBundle_homepage:

        // BloggerBlogBundle_nosotros
        if ($pathinfo === '/nosotros') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_nosotros;
            }
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::nosotrosAction',  '_route' => 'BloggerBlogBundle_nosotros',);
        }
        not_BloggerBlogBundle_nosotros:

        // BloggerBlogBundle_contacto
        if ($pathinfo === '/contacto') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_BloggerBlogBundle_contacto;
            }
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactoAction',  '_route' => 'BloggerBlogBundle_contacto',);
        }
        not_BloggerBlogBundle_contacto:

        // BloggerBlogBundle_blog_show
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_blog_show;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',)), array('_route' => 'BloggerBlogBundle_blog_show'));
        }
        not_BloggerBlogBundle_blog_show:

        // BloggerBlogBundle_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<blog_id>\\d+)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BloggerBlogBundle_comment_create;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',)), array('_route' => 'BloggerBlogBundle_comment_create'));
        }
        not_BloggerBlogBundle_comment_create:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
