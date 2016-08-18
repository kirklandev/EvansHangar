<?php

/* products/show.html.twig */
class __TwigTemplate_092652806521fa0ce1234b4ebc89f98123b2f0cfc96b2db18624631b61a9f263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/show.html.twig", 1);
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
        $__internal_f617f3a3622625ca37116670a6890ad0d1d71974a9003767ae59ff6254871357 = $this->env->getExtension("native_profiler");
        $__internal_f617f3a3622625ca37116670a6890ad0d1d71974a9003767ae59ff6254871357->enter($__internal_f617f3a3622625ca37116670a6890ad0d1d71974a9003767ae59ff6254871357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f617f3a3622625ca37116670a6890ad0d1d71974a9003767ae59ff6254871357->leave($__internal_f617f3a3622625ca37116670a6890ad0d1d71974a9003767ae59ff6254871357_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2f8cc8f6c269eea14c883a3e0c375ba9924830331259aa00e7ead8b260d1003 = $this->env->getExtension("native_profiler");
        $__internal_c2f8cc8f6c269eea14c883a3e0c375ba9924830331259aa00e7ead8b260d1003->enter($__internal_c2f8cc8f6c269eea14c883a3e0c375ba9924830331259aa00e7ead8b260d1003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Shop Name</p>
                <div class=\"list-group\">
                    <a href=\"#\" class=\"list-group-item\">Category 1</a>
                    <a href=\"#\" class=\"list-group-item\">Category 2</a>
                    <a href=\"#\" class=\"list-group-item\">Category 3</a>
                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"row carousel-holder\">

                    <div class=\"col-md-12\">
                        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
                                </div>
                            </div>
                            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class=\"row\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["product"], 2, array(), "array")), "html", null, true);
            echo "\" alt=\"xcvx\" class=\"productImage\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], 1, array(), "array"), 2, ".", ","), "html", null, true);
            echo "</h4>
                                <h4><a href=";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("/products/" . $this->getAttribute($context["product"], 3, array(), "array"))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], 0, array(), "array"), "html", null, true);
            echo "</a>
                                </h4>
                                <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], 4, array(), "array"), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"ratings\">
                                <p class=\"pull-right\">15 reviews</p>
                                <p>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </div>
            </div>
        </div>
    </div>
<!-- /.container -->
    ";
        // line 80
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_c2f8cc8f6c269eea14c883a3e0c375ba9924830331259aa00e7ead8b260d1003->leave($__internal_c2f8cc8f6c269eea14c883a3e0c375ba9924830331259aa00e7ead8b260d1003_prof);

    }

    public function getTemplateName()
    {
        return "products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 80,  135 => 75,  114 => 60,  107 => 58,  103 => 57,  98 => 55,  94 => 53,  90 => 52,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-md-3">*/
/*                 <p class="lead">Shop Name</p>*/
/*                 <div class="list-group">*/
/*                     <a href="#" class="list-group-item">Category 1</a>*/
/*                     <a href="#" class="list-group-item">Category 2</a>*/
/*                     <a href="#" class="list-group-item">Category 3</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/* */
/*                 <div class="row carousel-holder">*/
/* */
/*                     <div class="col-md-12">*/
/*                         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*                             <ol class="carousel-indicators">*/
/*                                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                             </ol>*/
/*                             <div class="carousel-inner">*/
/*                                 <div class="item active">*/
/*                                     <img class="slide-image" src="http://placehold.it/800x300" alt="">*/
/*                                 </div>*/
/*                                 <div class="item">*/
/*                                     <img class="slide-image" src="http://placehold.it/800x300" alt="">*/
/*                                 </div>*/
/*                                 <div class="item">*/
/*                                     <img class="slide-image" src="http://placehold.it/800x300" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">*/
/*                                 <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                             </a>*/
/*                             <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">*/
/*                                 <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     {% for product in products %}*/
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ asset(product[2]) }}" alt="xcvx" class="productImage">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">{{ product[1]|number_format(2, '.', ',') }}</h4>*/
/*                                 <h4><a href={{ asset("/products/" ~ product[3]) }}>{{ product[0] }}</a>*/
/*                                 </h4>*/
/*                                 <p>{{ product[4] }}</p>*/
/*                             </div>*/
/*                             <div class="ratings">*/
/*                                 <p class="pull-right">15 reviews</p>*/
/*                                 <p>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* <!-- /.container -->*/
/*     {{ parent() }}*/
/* {% endblock %}*/
