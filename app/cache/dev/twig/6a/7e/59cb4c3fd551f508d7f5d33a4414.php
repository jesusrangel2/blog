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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tags"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 7
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, $this->getContext($context, "weight"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
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

<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "latestComments"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "user"), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "id"))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "id"), "html", null, true);
            echo "\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "title"), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "created"), "Y-m-d h:iA"), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "comment"), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "</section>";
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
        return array (  103 => 34,  96 => 32,  87 => 28,  79 => 25,  74 => 23,  68 => 22,  64 => 21,  60 => 19,  55 => 18,  46 => 11,  39 => 9,  29 => 7,  24 => 6,  17 => 1,);
    }
}
