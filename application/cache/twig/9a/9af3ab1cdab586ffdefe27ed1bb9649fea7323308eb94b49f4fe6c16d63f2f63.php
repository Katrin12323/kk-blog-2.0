<?php

/* deedRegisterView/deedsAdmin.twig */
class __TwigTemplate_8cd8bc9ec3e6513fc2f6ee3e565145f71210a6aa3107953c3fc90800d1165ce3 extends Twig_Template
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
    <form action=\"http://localhost/CodeIgniter/index.php/Deeds/";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        }
        echo "\" method=\"POST\">

        <label for=\"personalNumber\">Personal Number: </label><br/>
        <input type=\"text\" name=\"personalNumber\" value = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deed"]) ? $context["deed"] : null), "personalNumber", array()), "html", null, true);
        echo "\"> <br/><br/>

        <label for=\"type\"> Type of deed: </label><br/>
        <input type=\"text\" name=\"type\" value = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deed"]) ? $context["deed"] : null), "type", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"actNumber\">Act number </label><br/>
        <input type=\"number\" name=\"actNumber\" value = \"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deed"]) ? $context["deed"] : null), "actNumber", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"deedNumber\"> Deed number </label><br/>
        <input type=\"number\" name=\"deedNumber\" value = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deed"]) ? $context["deed"] : null), "deedNumber", array()), "html", null, true);
        echo "\"><br/><br/>

        <input type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true);
        echo "\">
    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "deedRegisterView/deedsAdmin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  54 => 18,  48 => 15,  42 => 12,  36 => 9,  26 => 6,  19 => 1,);
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
    <form action=\"http://localhost/CodeIgniter/index.php/Deeds/{{ action }}{% if id %}/{{ id }}{% endif %}\" method=\"POST\">

        <label for=\"personalNumber\">Personal Number: </label><br/>
        <input type=\"text\" name=\"personalNumber\" value = \"{{ deed.personalNumber }}\"> <br/><br/>

        <label for=\"type\"> Type of deed: </label><br/>
        <input type=\"text\" name=\"type\" value = \"{{ deed.type }}\"><br/><br/>

        <label for=\"actNumber\">Act number </label><br/>
        <input type=\"number\" name=\"actNumber\" value = \"{{ deed.actNumber }}\"><br/><br/>

        <label for=\"deedNumber\"> Deed number </label><br/>
        <input type=\"number\" name=\"deedNumber\" value = \"{{ deed.deedNumber }}\"><br/><br/>

        <input type=\"submit\" value=\"{{ button }}\">
    </form>
</body>
</html>", "deedRegisterView/deedsAdmin.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/deedRegisterView/deedsAdmin.twig");
    }
}
