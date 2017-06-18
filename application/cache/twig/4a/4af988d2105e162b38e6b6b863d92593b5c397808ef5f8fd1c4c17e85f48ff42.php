<?php

/* animalsView/showAnimals.twig */
class __TwigTemplate_ba762d706f2bba1040a58126495a020a472c76dbd68547691c2e28061bdd8a1d extends Twig_Template
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
        echo "

var_dump(\$zoo)";
    }

    public function getTemplateName()
    {
        return "animalsView/showAnimals.twig";
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
        return new Twig_Source("

var_dump(\$zoo)", "animalsView/showAnimals.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/animalsView/showAnimals.twig");
    }
}
