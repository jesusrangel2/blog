<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_b67b9dfc177926ce4cb80d489ed147f1 extends Twig_Template
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
        echo "A contact enquiry was made by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "name"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".

Reply-To: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "email"), "html", null, true);
        echo "
Subject: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "subject"), "html", null, true);
        echo "
Body:
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "enquiry"), "body"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 9,  36 => 6,  174 => 52,  169 => 47,  166 => 46,  140 => 33,  98 => 5,  45 => 9,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 42,  152 => 58,  148 => 34,  145 => 56,  141 => 55,  134 => 50,  132 => 26,  127 => 46,  123 => 44,  109 => 39,  93 => 53,  90 => 32,  54 => 30,  133 => 44,  124 => 24,  111 => 12,  80 => 26,  60 => 16,  52 => 6,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 39,  25 => 3,  72 => 21,  64 => 15,  53 => 13,  34 => 6,  92 => 20,  86 => 49,  79 => 43,  19 => 2,  42 => 10,  40 => 8,  29 => 4,  26 => 1,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 39,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 22,  117 => 21,  103 => 36,  74 => 22,  47 => 19,  32 => 5,  24 => 2,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 34,  58 => 13,  49 => 11,  43 => 4,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 25,  125 => 42,  121 => 40,  115 => 39,  107 => 10,  99 => 34,  96 => 34,  91 => 52,  82 => 27,  77 => 42,  75 => 24,  57 => 15,  50 => 13,  46 => 9,  44 => 11,  39 => 9,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 9,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 46,  81 => 26,  73 => 40,  70 => 26,  67 => 19,  62 => 24,  59 => 33,  55 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 8,  35 => 2,  31 => 4,  28 => 3,);
    }
}
