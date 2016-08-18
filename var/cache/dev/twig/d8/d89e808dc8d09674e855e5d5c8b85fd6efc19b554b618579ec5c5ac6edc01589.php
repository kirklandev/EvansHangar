<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_37155ce597bfda90160976c65e1493a61c3390712e740543d8221b9133c43635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6f48bab15c61f89dcb5cc9abeb70e94be58b475d303d30adad8b7952232d5b9 = $this->env->getExtension("native_profiler");
        $__internal_b6f48bab15c61f89dcb5cc9abeb70e94be58b475d303d30adad8b7952232d5b9->enter($__internal_b6f48bab15c61f89dcb5cc9abeb70e94be58b475d303d30adad8b7952232d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f48bab15c61f89dcb5cc9abeb70e94be58b475d303d30adad8b7952232d5b9->leave($__internal_b6f48bab15c61f89dcb5cc9abeb70e94be58b475d303d30adad8b7952232d5b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe149e077c2587a89ceb238b7a30362124c299990eaeb1881e4cb92a3dd90e2d = $this->env->getExtension("native_profiler");
        $__internal_fe149e077c2587a89ceb238b7a30362124c299990eaeb1881e4cb92a3dd90e2d->enter($__internal_fe149e077c2587a89ceb238b7a30362124c299990eaeb1881e4cb92a3dd90e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe149e077c2587a89ceb238b7a30362124c299990eaeb1881e4cb92a3dd90e2d->leave($__internal_fe149e077c2587a89ceb238b7a30362124c299990eaeb1881e4cb92a3dd90e2d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29f13e07f2f427c22b77c9af75ceb46f333ed0bb03c430ff98be7aedb8331e91 = $this->env->getExtension("native_profiler");
        $__internal_29f13e07f2f427c22b77c9af75ceb46f333ed0bb03c430ff98be7aedb8331e91->enter($__internal_29f13e07f2f427c22b77c9af75ceb46f333ed0bb03c430ff98be7aedb8331e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29f13e07f2f427c22b77c9af75ceb46f333ed0bb03c430ff98be7aedb8331e91->leave($__internal_29f13e07f2f427c22b77c9af75ceb46f333ed0bb03c430ff98be7aedb8331e91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb41423bcd5837c1145b40e93eadfdd795126a017b935231ec55be936637b80 = $this->env->getExtension("native_profiler");
        $__internal_dbb41423bcd5837c1145b40e93eadfdd795126a017b935231ec55be936637b80->enter($__internal_dbb41423bcd5837c1145b40e93eadfdd795126a017b935231ec55be936637b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dbb41423bcd5837c1145b40e93eadfdd795126a017b935231ec55be936637b80->leave($__internal_dbb41423bcd5837c1145b40e93eadfdd795126a017b935231ec55be936637b80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
