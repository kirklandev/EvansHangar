<?php

/* products/services.html.twig */
class __TwigTemplate_9c695cde896963aedd2e63fa38dd5b6646be9b0ead5d778a583d1f564ad58600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/services.html.twig", 1);
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
        $__internal_6ae762e6f0f61ec03de310366d9892e3b895fbd423328efb85ec24b77292ad49 = $this->env->getExtension("native_profiler");
        $__internal_6ae762e6f0f61ec03de310366d9892e3b895fbd423328efb85ec24b77292ad49->enter($__internal_6ae762e6f0f61ec03de310366d9892e3b895fbd423328efb85ec24b77292ad49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae762e6f0f61ec03de310366d9892e3b895fbd423328efb85ec24b77292ad49->leave($__internal_6ae762e6f0f61ec03de310366d9892e3b895fbd423328efb85ec24b77292ad49_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1990f6ff9e40dfafd7100e0f239db6d7770e486a975b495348349749bdb35351 = $this->env->getExtension("native_profiler");
        $__internal_1990f6ff9e40dfafd7100e0f239db6d7770e486a975b495348349749bdb35351->enter($__internal_1990f6ff9e40dfafd7100e0f239db6d7770e486a975b495348349749bdb35351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/quad_build.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\">
            </div>
            <div class=\"col-sm-8\">
                <p>
                    We offer professional build services for all of our products. These builds are done
                    with care and precision, with the entire focus of one of our team members. Wire lengths
                    are trimmed to size, and soldered directly in place to  reduce weight. Also, the craft
                    will be tuned and trimmed prior to shipping, ensuring that you will be able to fly it
                    without needing to worry about PID tuning. Requests can involve coloring of frame, wire
                    wrapping, hydrodipping, and other options. For questions, please email us at
                    <a href=\"mailto:someone@example.com?Subject=Build%20Service\" target=\"_top\">
                        builds@thissite.com
                    </a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/filming_service.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\">
            </div>
            <div class=\"col-sm-8\">
                <p>
                    Got a small production that needs aerial shots? Or maybe some real estate that needs
                    to be advertised? Our team members are trained in operating large filming drones,
                    capable of carrying serious cameras. This can be an economic solution for stunning
                    cinematic footage without breaking the bank. Give us a call at 999-999-9999 for more
                    information.
                </p>
            </div>
        </div>
    </div>
    ";
        // line 38
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_1990f6ff9e40dfafd7100e0f239db6d7770e486a975b495348349749bdb35351->leave($__internal_1990f6ff9e40dfafd7100e0f239db6d7770e486a975b495348349749bdb35351_prof);

    }

    public function getTemplateName()
    {
        return "products/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  66 => 25,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 <img src="{{ asset("/images/quad_build.jpg") }}" class="img-thumbnail">*/
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                 <p>*/
/*                     We offer professional build services for all of our products. These builds are done*/
/*                     with care and precision, with the entire focus of one of our team members. Wire lengths*/
/*                     are trimmed to size, and soldered directly in place to  reduce weight. Also, the craft*/
/*                     will be tuned and trimmed prior to shipping, ensuring that you will be able to fly it*/
/*                     without needing to worry about PID tuning. Requests can involve coloring of frame, wire*/
/*                     wrapping, hydrodipping, and other options. For questions, please email us at*/
/*                     <a href="mailto:someone@example.com?Subject=Build%20Service" target="_top">*/
/*                         builds@thissite.com*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 <img src="{{ asset("/images/filming_service.jpg") }}" class="img-thumbnail">*/
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                 <p>*/
/*                     Got a small production that needs aerial shots? Or maybe some real estate that needs*/
/*                     to be advertised? Our team members are trained in operating large filming drones,*/
/*                     capable of carrying serious cameras. This can be an economic solution for stunning*/
/*                     cinematic footage without breaking the bank. Give us a call at 999-999-9999 for more*/
/*                     information.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
