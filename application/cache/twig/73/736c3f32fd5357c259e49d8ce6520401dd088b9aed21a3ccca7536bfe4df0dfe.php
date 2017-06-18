<?php

/* vteka/allVideotapes.twig */
class __TwigTemplate_b09d9d028a12beae2d3aa060ff4df0bc705da1aafd42f8f7d638e4337275165f extends Twig_Template
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
        echo "<html>
<head>

</head>
<body>
<ol>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videotapes"]) ? $context["videotapes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["videotape"]) {
            // line 8
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["videotape"], "title", array()), "html", null, true);
            echo "</li>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["videotape"], "year", array()), "html", null, true);
            echo "
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["videotape"], "genre", array()), "html", null, true);
            echo "
         --- <a href=\"http://localhost/CodeIgniter/index.php/Vteka/deleteVideoTape/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["videotape"], "id", array()), "html", null, true);
            echo "\">DELETE</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videotape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ol>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "vteka/allVideotapes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  44 => 11,  40 => 10,  36 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>

</head>
<body>
<ol>
    {% for videotape in videotapes %}
        <li>{{ videotape.title }}</li>
        {{ videotape.year }}
        {{ videotape.genre }}
         --- <a href=\"http://localhost/CodeIgniter/index.php/Vteka/deleteVideoTape/{{ videotape.id }}\">DELETE</a>
    {% endfor %}
</ol>
</body>
</html>", "vteka/allVideotapes.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/vteka/allVideotapes.twig");
    }
}
