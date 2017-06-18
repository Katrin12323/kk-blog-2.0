<?php

/* vteka/vteka_form.twig */
class __TwigTemplate_6ccd9c80faf9556da677fd4ec64c27394340978b59c08e7ead3430ff2c793bcd extends Twig_Template
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
        echo "<html xmlns=\"http://www.w3.org/1999/html\">

<head>
    <title> Vteka </title>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/Vteka/saveVideotape\" method=\"post\">

    <label for=\"title\"> Title </label><br/>
    <input type=\"text\" name=\"title\"> <br/><br/>

    <label for=\"year\"> Year  </label><br/>
    <input type=\"number\" name=\"year\"> <br/> <br/>

    <label for=\"country\"> Country  </label><br/>
    <input type=\"text\" name=\"country\"> <br/> <br/>

    <label for=\"genre\"> Genre  </label><br/>
    <input type=\"text\" name=\"genre\"> <br/> <br/>

    <label for=\"shortDescription\"> Short description </label><br/>
    <textarea name=\"shortDescription\" cols=\"40\" rows=\"10\"> </textarea> <br/> <br/>

    <label for=\"mainActors\"> Main actors  </label><br/>
    <input type=\"text\" name=\"mainActors\"> <br/> <br/>

    <label for=\"quantity\"> Quantity  </label><br/>
    <input type=\"number\" name=\"quantity\"> <br/> <br/>

    <input type=\"submit\" value=\"Save\">

</form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "vteka/vteka_form.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html xmlns=\"http://www.w3.org/1999/html\">

<head>
    <title> Vteka </title>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/Vteka/saveVideotape\" method=\"post\">

    <label for=\"title\"> Title </label><br/>
    <input type=\"text\" name=\"title\"> <br/><br/>

    <label for=\"year\"> Year  </label><br/>
    <input type=\"number\" name=\"year\"> <br/> <br/>

    <label for=\"country\"> Country  </label><br/>
    <input type=\"text\" name=\"country\"> <br/> <br/>

    <label for=\"genre\"> Genre  </label><br/>
    <input type=\"text\" name=\"genre\"> <br/> <br/>

    <label for=\"shortDescription\"> Short description </label><br/>
    <textarea name=\"shortDescription\" cols=\"40\" rows=\"10\"> </textarea> <br/> <br/>

    <label for=\"mainActors\"> Main actors  </label><br/>
    <input type=\"text\" name=\"mainActors\"> <br/> <br/>

    <label for=\"quantity\"> Quantity  </label><br/>
    <input type=\"number\" name=\"quantity\"> <br/> <br/>

    <input type=\"submit\" value=\"Save\">

</form>
</body>

</html>", "vteka/vteka_form.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/vteka/vteka_form.twig");
    }
}
