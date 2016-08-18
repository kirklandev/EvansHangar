<?php

/* products/main.html.twig */
class __TwigTemplate_93d540f7d3e89d7606524f67611d0b7a2bded134208501f25e50aeafa5759bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/main.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10930b0096b13be9456d4cba2e89d491046d400165a4b599d39db8e1350a4b40 = $this->env->getExtension("native_profiler");
        $__internal_10930b0096b13be9456d4cba2e89d491046d400165a4b599d39db8e1350a4b40->enter($__internal_10930b0096b13be9456d4cba2e89d491046d400165a4b599d39db8e1350a4b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10930b0096b13be9456d4cba2e89d491046d400165a4b599d39db8e1350a4b40->leave($__internal_10930b0096b13be9456d4cba2e89d491046d400165a4b599d39db8e1350a4b40_prof);

    }

    public function getTemplateName()
    {
        return "products/main.html.twig";
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
