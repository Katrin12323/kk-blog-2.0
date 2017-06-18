<?php

/* savedMagazine.twig */
class __TwigTemplate_cc2df3ef030fcc8844fb16a8c76109634ead22cd4a6d3c4696a3eba271fcaa8b extends Twig_Template
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
    Successfully inserted the magazine <br/>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "savedMagazine.twig";
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
    <title> </title>
</head>

<body>
    Successfully inserted the magazine <br/>

</body>
</html>", "savedMagazine.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/savedMagazine.twig");
    }
}
