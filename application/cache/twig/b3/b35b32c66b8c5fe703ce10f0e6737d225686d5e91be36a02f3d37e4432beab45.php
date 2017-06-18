<?php

/* magazinForm.twig */
class __TwigTemplate_5935268fbf9b2361f657a0e648f66535d088d764dc1c42c50905a77206521cfe extends Twig_Template
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

<h2> Magazine </h2>
    <form action=\"http://localhost/CodeIgniter/index.php/Magazines/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\" method=\"post\">

        <label for=\"name\"> Name of the magazine </label><br/>
            <input type=\"text\" name=\"name\"> <br/><br/>

        <label for=\"price\"> Price of the magazine </label><br/>
            <input type=\"number\" name=\"price\"><br/><br/>

        <label for=\"kind\"> Kind of the magazine </label><br/>
            <input type=\"text\" name=\"kind\"><br/><br/>

        <label for=\"quantity\"> Quantity of the magazine </label><br/>
            <input type=\"text\" name=\"quantity\"><br/><br/>

        <input type=\"submit\" value=\"Save new magazine\">

    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "magazinForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
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

<h2> Magazine </h2>
    <form action=\"http://localhost/CodeIgniter/index.php/Magazines/{{ action }}\" method=\"post\">

        <label for=\"name\"> Name of the magazine </label><br/>
            <input type=\"text\" name=\"name\"> <br/><br/>

        <label for=\"price\"> Price of the magazine </label><br/>
            <input type=\"number\" name=\"price\"><br/><br/>

        <label for=\"kind\"> Kind of the magazine </label><br/>
            <input type=\"text\" name=\"kind\"><br/><br/>

        <label for=\"quantity\"> Quantity of the magazine </label><br/>
            <input type=\"text\" name=\"quantity\"><br/><br/>

        <input type=\"submit\" value=\"Save new magazine\">

    </form>
</body>
</html>", "magazinForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/magazinForm.twig");
    }
}
