<?php

/* BloggerBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_6a7e59cb4c3fd551f508d7f5d33a4414 extends Twig_Template
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
        echo "<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 7
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "    </p>
</section>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  24 => 6,  17 => 1,  174 => 52,  169 => 47,  166 => 46,  161 => 42,  156 => 39,  148 => 34,  140 => 33,  132 => 26,  128 => 25,  124 => 24,  120 => 22,  117 => 21,  111 => 12,  107 => 10,  104 => 9,  98 => 5,  93 => 53,  91 => 52,  86 => 49,  84 => 46,  79 => 43,  77 => 42,  73 => 40,  71 => 39,  63 => 34,  59 => 33,  54 => 30,  52 => 21,  41 => 14,  32 => 5,  48 => 10,  39 => 9,  30 => 4,  27 => 3,  90 => 24,  81 => 20,  75 => 19,  69 => 18,  62 => 14,  58 => 13,  53 => 11,  45 => 9,  38 => 6,  35 => 5,  29 => 7,  26 => 1,);
    }
}
