<?php

/* children/after_insert_child.twig */
class __TwigTemplate_0d4db8fa78c8ff51cf7f5c78781b1be7d04e21722b71e1109fba72406e58d09a extends Twig_Template
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
Successfully inserted one new child.";
    }

    public function getTemplateName()
    {
        return "children/after_insert_child.twig";
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
Successfully inserted one new child.", "children/after_insert_child.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/children/after_insert_child.twig");
    }
}
