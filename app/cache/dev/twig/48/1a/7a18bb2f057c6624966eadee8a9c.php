<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_481a7a18bb2f057c6624966eadee8a9c extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  25 => 5,  17 => 1,  174 => 52,  169 => 47,  166 => 46,  161 => 42,  156 => 39,  148 => 34,  140 => 33,  132 => 26,  128 => 25,  124 => 24,  120 => 22,  117 => 21,  111 => 12,  107 => 10,  104 => 9,  98 => 5,  93 => 53,  91 => 52,  86 => 49,  84 => 46,  79 => 43,  77 => 42,  73 => 40,  71 => 39,  63 => 34,  59 => 33,  54 => 30,  52 => 21,  39 => 9,  32 => 5,  44 => 9,  41 => 14,  35 => 5,  30 => 4,  27 => 3,  29 => 5,  26 => 1,);
    }
}
