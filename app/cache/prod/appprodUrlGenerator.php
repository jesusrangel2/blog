<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'BloggerBlogBundle_homepage' => true,
       'BloggerBlogBundle_nosotros' => true,
       'BloggerBlogBundle_contacto' => true,
       'BloggerBlogBundle_blog_show' => true,
       'BloggerBlogBundle_comment_create' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getBloggerBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getBloggerBlogBundle_nosotrosRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::nosotrosAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/nosotros',  ),));
    }

    private function getBloggerBlogBundle_contactoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactoAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/contacto',  ),));
    }

    private function getBloggerBlogBundle_blog_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',), array (  '_method' => 'GET',  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getBloggerBlogBundle_comment_createRouteInfo()
    {
        return array(array (  0 => 'blog_id',), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',), array (  '_method' => 'POST',  'blog_id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'blog_id',  ),  1 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }
}
