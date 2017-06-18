<?php

/* children/childForm.twig */
class __TwigTemplate_54f841f267fc23d7de99c66aff1ca6648deffa68b898ebbf0ffde698659fdd5d extends Twig_Template
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
<form action=\"http://localhost/CodeIgniter/index.php/Children/";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        }
        echo "\" method=\"POST\">

    <label for=\"firstName\">First name: </label><br/>
    <input type=\"text\" name=\"firstName\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "firstName", array()), "html", null, true);
        echo "\"> <br/><br/>

    <label for=\"lastName\"> Last name: </label><br/>
    <input type=\"text\" name=\"lastName\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "lastName", array()), "html", null, true);
        echo "\"><br/><br/>

    <label for=\"personalNumber\"> Personal number: </label><br/>
    <input type=\"number\" name=\"personalNumber\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "personalNumber", array()), "html", null, true);
        echo "\"> <br/><br/>

    <label for= \"years\">Years: </label><br/>
    <input type=\"text\" name=\"years\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "years", array()), "html", null, true);
        echo "\"><br/><br/>

    <label for=\"diseases\"> Diseases: </label><br/>
    <input type=\"text\" name=\"diseases\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "diseases", array()), "html", null, true);
        echo "\"><br/><br/>

    <input type=\"submit\" value=\"Insert\">
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "children/childForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  54 => 18,  48 => 15,  42 => 12,  36 => 9,  26 => 6,  19 => 1,);
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
<form action=\"http://localhost/CodeIgniter/index.php/Children/{{ action }}{% if id %}/{{ id }}{% endif %}\" method=\"POST\">

    <label for=\"firstName\">First name: </label><br/>
    <input type=\"text\" name=\"firstName\" value=\"{{ child.firstName }}\"> <br/><br/>

    <label for=\"lastName\"> Last name: </label><br/>
    <input type=\"text\" name=\"lastName\" value=\"{{ child.lastName }}\"><br/><br/>

    <label for=\"personalNumber\"> Personal number: </label><br/>
    <input type=\"number\" name=\"personalNumber\" value=\"{{ child.personalNumber }}\"> <br/><br/>

    <label for= \"years\">Years: </label><br/>
    <input type=\"text\" name=\"years\" value=\"{{ child.years }}\"><br/><br/>

    <label for=\"diseases\"> Diseases: </label><br/>
    <input type=\"text\" name=\"diseases\" value=\"{{ child.diseases }}\"><br/><br/>

    <input type=\"submit\" value=\"Insert\">
</form>
</body>
</html>", "children/childForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/children/childForm.twig");
    }
}
