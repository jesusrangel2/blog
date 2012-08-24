<?php

/* BloggerBlogBundle:Usuario:login.html.twig */
class __TwigTemplate_747c9893d9eff0168f6a36f74fb10e19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Login</h1>
\t
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
        echo "
\t
\t<form action =\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_check_path"), "html", null, true);
        echo "\"  method=\"post\" class=\"blogger\">
\t<p>Email \t\t<input type=\"email\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" /></p>
\t<p>Contraseña \t<input type=\"password\" name=\"_password\" /> </p>
\t<br />
\t<input type=\"submit\" value=\"enviar\" />
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  33 => 6,  29 => 4,  26 => 3,);
    }
}
