<?php

/* products/ZMR250.html.twig */
class __TwigTemplate_981023442635df7abc56550453f2453dc78681356a35d0d00aeeb7aa15383b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/ZMR250.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aea8daead19f592ea8755a99c28ff1125a07b1e8ddb95a6918269dbae6fee83 = $this->env->getExtension("native_profiler");
        $__internal_7aea8daead19f592ea8755a99c28ff1125a07b1e8ddb95a6918269dbae6fee83->enter($__internal_7aea8daead19f592ea8755a99c28ff1125a07b1e8ddb95a6918269dbae6fee83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/ZMR250.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aea8daead19f592ea8755a99c28ff1125a07b1e8ddb95a6918269dbae6fee83->leave($__internal_7aea8daead19f592ea8755a99c28ff1125a07b1e8ddb95a6918269dbae6fee83_prof);

    }

    public function getTemplateName()
    {
        return "products/ZMR250.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
