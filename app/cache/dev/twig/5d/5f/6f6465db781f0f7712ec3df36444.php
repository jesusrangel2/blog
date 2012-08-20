<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_5d5f6f6465db781f0f7712ec3df36444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"blogger\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  17 => 1,  74 => 22,  72 => 21,  69 => 20,  67 => 19,  58 => 13,  51 => 11,  46 => 9,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
