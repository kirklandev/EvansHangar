<?php

/* products/about.html.twig */
class __TwigTemplate_81f2c333d1ee7f542c851992e2242c6e678a04dfe5bd0aa26d79875cd0abe256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22da5506ac58b7376f32d233d0e801111ead883766d7affabae0b5070bb3b9f4 = $this->env->getExtension("native_profiler");
        $__internal_22da5506ac58b7376f32d233d0e801111ead883766d7affabae0b5070bb3b9f4->enter($__internal_22da5506ac58b7376f32d233d0e801111ead883766d7affabae0b5070bb3b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22da5506ac58b7376f32d233d0e801111ead883766d7affabae0b5070bb3b9f4->leave($__internal_22da5506ac58b7376f32d233d0e801111ead883766d7affabae0b5070bb3b9f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e27a7165775c814651a7363a5599b81b9773d6915d14dcd5dcc34e9943b071b = $this->env->getExtension("native_profiler");
        $__internal_2e27a7165775c814651a7363a5599b81b9773d6915d14dcd5dcc34e9943b071b->enter($__internal_2e27a7165775c814651a7363a5599b81b9773d6915d14dcd5dcc34e9943b071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <h2>About Us</h2>
            <p>
                \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.\"
            </p>
        </div>
    </div>
    ";
        // line 17
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_2e27a7165775c814651a7363a5599b81b9773d6915d14dcd5dcc34e9943b071b->leave($__internal_2e27a7165775c814651a7363a5599b81b9773d6915d14dcd5dcc34e9943b071b_prof);

    }

    public function getTemplateName()
    {
        return "products/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h2>About Us</h2>*/
/*             <p>*/
/*                 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor*/
/*                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis*/
/*                 nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.*/
/*                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore*/
/*                 eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,*/
/*                 sunt in culpa qui officia deserunt mollit anim id est laborum."*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
