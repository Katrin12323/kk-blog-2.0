<?php

/* carsForm.twig */
class __TwigTemplate_61d3f4beaec12c24b25fe6214166c9dce6d7ace9eaee41154586fa9567753ce1 extends Twig_Template
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
<p>
    ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["testVariable"]) ? $context["testVariable"] : null), "html", null, true);
        echo "
</p>
<form action=\"http://localhost/CodeIgniter/index.php/Cars/saveTheNewCar\" method=\"POST\">

    <label for=\"brand\">Brand: </label><br/>
    <input type=\"text\" name=\"brand\"> <br/><br/>

    <label for=\"model\"> Model: </label><br/>
    <input type=\"text\" name=\"model\"><br/><br/>

    <label for=\"year\">Year: </label><br/>
    <input type=\"number\" name=\"year\"><br/><br/>

    <label for=\"color\"> Color: </label><br/>
    <input type=\"text\" name=\"color\"><br/><br/>

    <input type=\"submit\" value=\"Save the new car into the database\">
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "carsForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
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
<p>
    {{ testVariable }}
</p>
<form action=\"http://localhost/CodeIgniter/index.php/Cars/saveTheNewCar\" method=\"POST\">

    <label for=\"brand\">Brand: </label><br/>
    <input type=\"text\" name=\"brand\"> <br/><br/>

    <label for=\"model\"> Model: </label><br/>
    <input type=\"text\" name=\"model\"><br/><br/>

    <label for=\"year\">Year: </label><br/>
    <input type=\"number\" name=\"year\"><br/><br/>

    <label for=\"color\"> Color: </label><br/>
    <input type=\"text\" name=\"color\"><br/><br/>

    <input type=\"submit\" value=\"Save the new car into the database\">
</form>
</body>
</html>", "carsForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/carsForm.twig");
    }
}
