<?php

/* allMagazines.twig */
class __TwigTemplate_eec03cef62ba4159a33d80d7fa5ab9cd5875be8e434b0f423c89124ca689b7d0 extends Twig_Template
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
    <title> </title>
</head>

<body>
        <ol>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["magazine"]) ? $context["magazine"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allMagazines"]) {
            // line 9
            echo "                <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "name", array()), "html", null, true);
            echo " </li>
                     ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "price", array()), "html", null, true);
            echo " \$
              kind:  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "kind", array()), "html", null, true);
            echo "
          quantity:  ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "quantity", array()), "html", null, true);
            echo "
            --- <a href=\"http://localhost/CodeIgniter/index.php/Magazines/deleteMagazine/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "id", array()), "html", null, true);
            echo "\"> DELETE </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allMagazines'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ol>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "allMagazines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
    <title> </title>
</head>

<body>
        <ol>
            {% for allMagazines in magazine %}
                <li> {{ allMagazines.name }} </li>
                     {{ allMagazines.price }} \$
              kind:  {{ allMagazines.kind }}
          quantity:  {{allMagazines.quantity }}
            --- <a href=\"http://localhost/CodeIgniter/index.php/Magazines/deleteMagazine/{{ allMagazines.id }}\"> DELETE </a>
            {% endfor %}
            </ol>
</body>

</html>", "allMagazines.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/allMagazines.twig");
    }
}
