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
        return array (  24 => 2,  68 => 9,  43 => 4,  17 => 1,  174 => 52,  169 => 47,  166 => 46,  161 => 42,  156 => 39,  148 => 34,  140 => 33,  132 => 26,  128 => 25,  124 => 24,  120 => 22,  117 => 21,  111 => 12,  107 => 10,  104 => 9,  98 => 5,  93 => 53,  91 => 52,  86 => 49,  84 => 46,  79 => 43,  77 => 42,  73 => 40,  71 => 39,  63 => 34,  59 => 33,  54 => 30,  52 => 6,  41 => 14,  32 => 5,  26 => 1,  48 => 10,  45 => 9,  39 => 9,  35 => 2,  30 => 4,  74 => 22,  72 => 21,  69 => 20,  67 => 19,  58 => 13,  51 => 11,  46 => 9,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
