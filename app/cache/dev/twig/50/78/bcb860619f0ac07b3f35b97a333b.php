<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_5078bcb860619f0ac07b3f35b97a333b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getContext($context, "blog"), "image")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "blog"), "html", null, true);
        echo "</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 19
        $this->env->loadTemplate("BloggerBlogBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, "comments"))));
        // line 20
        echo "        \t<h3>Add Comment</h3>
        ";
        // line 21
        echo $this->env->getExtension('actions')->renderAction("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute($this->getContext($context, "blog"), "id")), array());
        // line 22
        echo "        </section>
    </section>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  72 => 21,  69 => 20,  67 => 19,  58 => 13,  51 => 11,  46 => 9,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
