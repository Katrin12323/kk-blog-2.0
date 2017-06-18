<?php

/* vteka/vteka_list.twig */
class __TwigTemplate_e543f0fc0dfe099f4c8db5a64276eb5d2892e55718bb7b15abc0cc209aec0de1 extends Twig_Template
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

<h2> You inserted the videotape of the film: </h2>
<ul>

     <li> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "title", array()), "html", null, true);
        echo " </li> </br>
     <li> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "year", array()), "html", null, true);
        echo " </li> </br>
    <li> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "country", array()), "html", null, true);
        echo " </li> </br>
    <li>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "genre", array()), "html", null, true);
        echo " </li> </br>
    <li> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "shortDescription", array()), "html", null, true);
        echo " </li> </br>
    <li>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "mainActors", array()), "html", null, true);
        echo " </li> </br>
    <li> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["videotape"]) ? $context["videotape"] : null), "quantity", array()), "html", null, true);
        echo " </li> <br/>

    </ul>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "vteka/vteka_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
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

<h2> You inserted the videotape of the film: </h2>
<ul>

     <li> {{ videotape.title }} </li> </br>
     <li> {{ videotape.year }} </li> </br>
    <li> {{ videotape.country }} </li> </br>
    <li>{{ videotape.genre }} </li> </br>
    <li> {{ videotape.shortDescription }} </li> </br>
    <li>{{ videotape.mainActors }} </li> </br>
    <li> {{ videotape.quantity }} </li> <br/>

    </ul>
</body>
</html>
", "vteka/vteka_list.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/vteka/vteka_list.twig");
    }
}
