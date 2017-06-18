<?php

/* animalsView/zooForm.twig */
class __TwigTemplate_744e537483d759b0ff1d8375489d7ea0b48c88691d6fab967a35f0f2d13c04ea extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title> Zoo </title>
</head>
<body>

<form action=\"http://localhost/CodeIgniter/index.php/Animals/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        }
        echo "\" method=\"post\">

    <label for=\"nameOfTheType\"> Name:  </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheType\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zoo"]) ? $context["zoo"] : null), "nameOfTheType", array()), "html", null, true);
        echo "\"> <br/><br/>

    <label for=\"kind\"> Kind: </label> <br/><br>
    <input type=\"text\" name=\"kind\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zoo"]) ? $context["zoo"] : null), "kind", array()), "html", null, true);
        echo "\"><br/> <br/>

    <label for=\"habitat\"> Habitat: </label> <br/><br>
    <input type=\"text\" name=\"habitat\" value = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zoo"]) ? $context["zoo"] : null), "habitat", array()), "html", null, true);
        echo "\"><br/> <br/>

    <label for=\"nameOfTheAnimal\"> Name of the animal: </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheAnimal\" value = \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zoo"]) ? $context["zoo"] : null), "nameOfTheAnimal", array()), "html", null, true);
        echo "\"><br/> <br/>

    <label for=\"age\"> Age: </label> <br/><br>
    <input type=\"text\" name=\"age\" value = \"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zoo"]) ? $context["zoo"] : null), "age", array()), "html", null, true);
        echo "\"><br/> <br/>

    <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true);
        echo "\">
</form>

</body>";
    }

    public function getTemplateName()
    {
        return "animalsView/zooForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  63 => 24,  57 => 21,  51 => 18,  45 => 15,  39 => 12,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title> Zoo </title>
</head>
<body>

<form action=\"http://localhost/CodeIgniter/index.php/Animals/{{ action }}{% if id %}/{{ id }}{% endif %}\" method=\"post\">

    <label for=\"nameOfTheType\"> Name:  </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheType\" value=\"{{ zoo.nameOfTheType }}\"> <br/><br/>

    <label for=\"kind\"> Kind: </label> <br/><br>
    <input type=\"text\" name=\"kind\" value=\"{{ zoo.kind }}\"><br/> <br/>

    <label for=\"habitat\"> Habitat: </label> <br/><br>
    <input type=\"text\" name=\"habitat\" value = \"{{ zoo.habitat }}\"><br/> <br/>

    <label for=\"nameOfTheAnimal\"> Name of the animal: </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheAnimal\" value = \"{{ zoo.nameOfTheAnimal }}\"><br/> <br/>

    <label for=\"age\"> Age: </label> <br/><br>
    <input type=\"text\" name=\"age\" value = \"{{ zoo.age }}\"><br/> <br/>

    <input type=\"submit\" value=\"{{ button }}\">
</form>

</body>", "animalsView/zooForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/animalsView/zooForm.twig");
    }
}
