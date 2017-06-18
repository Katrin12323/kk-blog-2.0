<?php

/* children/allChild.twig */
class __TwigTemplate_116988e423e9ccb58f4b07f19cbbc0636abbf728ae1275b40b3468c2b503e8de extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allchildren"]) {
            // line 9
            echo "        <li>
           First Name: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "firstName", array()), "html", null, true);
            echo ";
           Last name: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "lastName", array()), "html", null, true);
            echo ";
           Personal number: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "personalNumber", array()), "html", null, true);
            echo ";
           Years:  ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "years", array()), "html", null, true);
            echo ";
           Diseases: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "diseases", array()), "html", null, true);
            echo "
        </li>
            ----<a href=\"http://localhost/CodeIgniter/index.php/Children/deleteChild/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "id", array()), "html", null, true);
            echo "\"> Delete this child </a>
            ----<a href=\"http://localhost/CodeIgniter/index.php/Children/updateForm/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["allchildren"], "id", array()), "html", null, true);
            echo "\"> Update this child </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allchildren'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ol>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "children/allChild.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  60 => 17,  56 => 16,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
        {% for allchildren in children %}
        <li>
           First Name: {{ allchildren.firstName }};
           Last name: {{ allchildren.lastName }};
           Personal number: {{ allchildren.personalNumber }};
           Years:  {{ allchildren.years }};
           Diseases: {{ allchildren.diseases }}
        </li>
            ----<a href=\"http://localhost/CodeIgniter/index.php/Children/deleteChild/{{ allchildren.id }}\"> Delete this child </a>
            ----<a href=\"http://localhost/CodeIgniter/index.php/Children/updateForm/{{ allchildren.id }}\"> Update this child </a>
        {% endfor %}
    </ol>

</body>
</html>", "children/allChild.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/children/allChild.twig");
    }
}
