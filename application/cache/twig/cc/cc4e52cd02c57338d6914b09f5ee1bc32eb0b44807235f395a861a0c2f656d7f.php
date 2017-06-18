<?php

/* deedRegisterView/searchDeeds.twig */
class __TwigTemplate_627098bde320775565b80a053ff9e702a1f080aed3f08d175d52f53f2298b8f9 extends Twig_Template
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
<form action=\"http://localhost/CodeIgniter/index.php/Deeds/searchDeeds\" method=\"POST\">

    <label for=\"personalNumber\">Personal Number: </label><br/>
    <input type=\"text\" name=\"personalNumber\"> <br/><br/>

    <input type=\"submit\" value=\"Search\">
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "deedRegisterView/searchDeeds.twig";
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
        return new Twig_Source("<html>
<head>

</head>
<body>
<form action=\"http://localhost/CodeIgniter/index.php/Deeds/searchDeeds\" method=\"POST\">

    <label for=\"personalNumber\">Personal Number: </label><br/>
    <input type=\"text\" name=\"personalNumber\"> <br/><br/>

    <input type=\"submit\" value=\"Search\">
</form>
</body>
</html>", "deedRegisterView/searchDeeds.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/deedRegisterView/searchDeeds.twig");
    }
}
