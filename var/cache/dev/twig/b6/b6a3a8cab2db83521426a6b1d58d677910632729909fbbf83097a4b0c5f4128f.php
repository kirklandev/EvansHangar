<?php

/* products/BOLT180.html.twig */
class __TwigTemplate_99209b18d8429eb0c52e2531f7057bf5cc5da60924024ba31e07b954987c7987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/BOLT180.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a795367314f0ccc3d2c5131f7df18666680e01a601a26fcebe7c76c1edaa1736 = $this->env->getExtension("native_profiler");
        $__internal_a795367314f0ccc3d2c5131f7df18666680e01a601a26fcebe7c76c1edaa1736->enter($__internal_a795367314f0ccc3d2c5131f7df18666680e01a601a26fcebe7c76c1edaa1736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/BOLT180.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a795367314f0ccc3d2c5131f7df18666680e01a601a26fcebe7c76c1edaa1736->leave($__internal_a795367314f0ccc3d2c5131f7df18666680e01a601a26fcebe7c76c1edaa1736_prof);

    }

    public function getTemplateName()
    {
        return "products/BOLT180.html.twig";
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
