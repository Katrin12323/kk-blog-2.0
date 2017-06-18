<?php

/* show_all_cars.twig */
class __TwigTemplate_942b65930dcc72b449c5ca53fa39d6f7d4a6e1fb064f63ead4cbb88dc0733ff9 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["allCars"]) ? $context["allCars"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 8
            echo "              <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "brand", array()), "html", null, true);
            echo "</li>
              ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "model", array()), "html", null, true);
            echo "
              ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "year", array()), "html", null, true);
            echo "
              ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "color", array()), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ol>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "show_all_cars.twig";
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
          {% for car in allCars %}
              <li>{{ car.brand }}</li>
              {{ car.model }}
              {{ car.year }}
              {{ car.color }}
          {% endfor %}
        </ol>
    </body>
</html>", "show_all_cars.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/show_all_cars.twig");
    }
}
