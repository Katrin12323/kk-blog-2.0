<?php

/* animalsView/showAllAnimals.twig */
class __TwigTemplate_19123ace6a9b76e3d2608ed1ad2c5b3224ea377956c16dbd89bb399229ebede1 extends Twig_Template
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

<form action=\"http://localhost/CodeIgniter/index.php/Animals/searchAnimal\" method=\"post\">

    <label for=\"nameOfTheType\"> Search by name:  </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheType\"> <br/><br/>


    <label for=\"habitat\"> Search by habitat: </label> <br/><br>
    <input type=\"text\" name=\"habitat\"><br/> <br/>

    <input type=\"submit\" value=\"Search\">
</form>


    <ol>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zoo"]) ? $context["zoo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allAnimals"]) {
            // line 24
            echo "                <li>
            Type: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "nameOfTheType", array()), "html", null, true);
            echo ";
            Kind: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "kind", array()), "html", null, true);
            echo ";
           Name: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "nameOfTheAnimal", array()), "html", null, true);
            echo ";
            Age: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "age", array()), "html", null, true);
            echo "
        </li>
                ---><a href=\"http://localhost/CodeIgniter/index.php/Animals/deleteAnimal/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "id", array()), "html", null, true);
            echo "\" > Delete this animal </a>
                ---><a href=\"http://localhost/CodeIgniter/index.php/Animals/updateForm/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "id", array()), "html", null, true);
            echo "\" > Update this animal </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allAnimals'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    </ol>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "animalsView/showAllAnimals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 33,  71 => 31,  67 => 30,  62 => 28,  58 => 27,  54 => 26,  50 => 25,  47 => 24,  43 => 23,  19 => 1,);
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

<form action=\"http://localhost/CodeIgniter/index.php/Animals/searchAnimal\" method=\"post\">

    <label for=\"nameOfTheType\"> Search by name:  </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheType\"> <br/><br/>


    <label for=\"habitat\"> Search by habitat: </label> <br/><br>
    <input type=\"text\" name=\"habitat\"><br/> <br/>

    <input type=\"submit\" value=\"Search\">
</form>


    <ol>

            {% for allAnimals in zoo  %}
                <li>
            Type: {{ allAnimals.nameOfTheType }};
            Kind: {{ allAnimals.kind }};
           Name: {{ allAnimals.nameOfTheAnimal }};
            Age: {{ allAnimals.age }}
        </li>
                ---><a href=\"http://localhost/CodeIgniter/index.php/Animals/deleteAnimal/{{ allAnimals.id }}\" > Delete this animal </a>
                ---><a href=\"http://localhost/CodeIgniter/index.php/Animals/updateForm/{{ allAnimals.id }}\" > Update this animal </a>
            {% endfor %}

    </ol>
</body>
</html>
", "animalsView/showAllAnimals.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/animalsView/showAllAnimals.twig");
    }
}
