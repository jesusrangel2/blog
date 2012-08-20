<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_f4435657d23f0f5c49d25037e04ce935 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blogs"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 5
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, "blog"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getContext($context, "blog"), "image")))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, "blog"), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, "blog"), "id"))), "html", null, true);
            echo "#comments\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "comments")), "html", null, true);
            echo "</a></p>
\t\t\t    <p>Posted by <span class=\"highlight\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "author"), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "h:iA"), "html", null, true);
            echo "</p>
\t\t\t    <p>Tags: <span class=\"highlight\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "tags"), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  81 => 20,  75 => 19,  69 => 18,  62 => 14,  58 => 13,  53 => 11,  45 => 8,  38 => 6,  35 => 5,  29 => 4,  26 => 3,);
    }
}
