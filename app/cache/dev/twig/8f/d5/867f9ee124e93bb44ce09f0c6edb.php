<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_8fd5867f9ee124e93bb44ce09f0c6edb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  136 => 40,  114 => 30,  85 => 43,  61 => 23,  21 => 1,  68 => 9,  36 => 6,  174 => 52,  169 => 47,  166 => 46,  140 => 33,  98 => 5,  45 => 8,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 42,  152 => 58,  148 => 34,  145 => 56,  141 => 55,  134 => 50,  132 => 26,  127 => 46,  123 => 30,  109 => 39,  93 => 53,  90 => 45,  54 => 30,  133 => 39,  124 => 24,  111 => 29,  80 => 26,  60 => 16,  52 => 6,  97 => 34,  95 => 47,  88 => 29,  78 => 25,  71 => 39,  25 => 3,  72 => 21,  64 => 24,  53 => 11,  34 => 5,  92 => 20,  86 => 26,  79 => 39,  19 => 2,  42 => 10,  40 => 7,  29 => 3,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 39,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 22,  117 => 21,  103 => 36,  74 => 22,  47 => 13,  32 => 5,  24 => 9,  22 => 3,  23 => 29,  17 => 1,  69 => 18,  63 => 34,  58 => 13,  49 => 11,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 25,  125 => 42,  121 => 40,  115 => 39,  107 => 10,  99 => 34,  96 => 34,  91 => 52,  82 => 27,  77 => 23,  75 => 37,  57 => 13,  50 => 14,  46 => 9,  44 => 8,  39 => 10,  33 => 5,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 9,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 46,  81 => 41,  73 => 28,  70 => 27,  67 => 19,  62 => 14,  59 => 22,  55 => 12,  51 => 11,  48 => 10,  41 => 11,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
