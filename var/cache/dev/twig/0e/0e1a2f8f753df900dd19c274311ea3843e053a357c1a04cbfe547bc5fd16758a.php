<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9357f874ded98775e58615eac7c0359a56f097df225c4ac1e08a635aa2317215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c71794818b610145f3214b05fb910ea4355b6b12eb9373afc4770424dfa0a8f = $this->env->getExtension("native_profiler");
        $__internal_6c71794818b610145f3214b05fb910ea4355b6b12eb9373afc4770424dfa0a8f->enter($__internal_6c71794818b610145f3214b05fb910ea4355b6b12eb9373afc4770424dfa0a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c71794818b610145f3214b05fb910ea4355b6b12eb9373afc4770424dfa0a8f->leave($__internal_6c71794818b610145f3214b05fb910ea4355b6b12eb9373afc4770424dfa0a8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d881086cf70002eedc104f32add1ebecb8b8b43bae770a0ba6f2c3ba0e24fb8d = $this->env->getExtension("native_profiler");
        $__internal_d881086cf70002eedc104f32add1ebecb8b8b43bae770a0ba6f2c3ba0e24fb8d->enter($__internal_d881086cf70002eedc104f32add1ebecb8b8b43bae770a0ba6f2c3ba0e24fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d881086cf70002eedc104f32add1ebecb8b8b43bae770a0ba6f2c3ba0e24fb8d->leave($__internal_d881086cf70002eedc104f32add1ebecb8b8b43bae770a0ba6f2c3ba0e24fb8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3b97d490ff631e1cf54d6629ab31cbea73bab9711dc9fe283e53bd0275c6801 = $this->env->getExtension("native_profiler");
        $__internal_b3b97d490ff631e1cf54d6629ab31cbea73bab9711dc9fe283e53bd0275c6801->enter($__internal_b3b97d490ff631e1cf54d6629ab31cbea73bab9711dc9fe283e53bd0275c6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3b97d490ff631e1cf54d6629ab31cbea73bab9711dc9fe283e53bd0275c6801->leave($__internal_b3b97d490ff631e1cf54d6629ab31cbea73bab9711dc9fe283e53bd0275c6801_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6f133820770bed3a65ec932f46b52e6d00f267a641ffdf7964e2918e9691278 = $this->env->getExtension("native_profiler");
        $__internal_c6f133820770bed3a65ec932f46b52e6d00f267a641ffdf7964e2918e9691278->enter($__internal_c6f133820770bed3a65ec932f46b52e6d00f267a641ffdf7964e2918e9691278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6f133820770bed3a65ec932f46b52e6d00f267a641ffdf7964e2918e9691278->leave($__internal_c6f133820770bed3a65ec932f46b52e6d00f267a641ffdf7964e2918e9691278_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
