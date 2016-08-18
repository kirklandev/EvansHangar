<?php

/* base.html.twig */
class __TwigTemplate_ea24021494f6ef1d2895b6918c047385c66d7a2bbad5d936d7f29c5f32b96139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5da711258c24a5593d7687a45d5636d86cb350b1b840cbdbca26d195ab93fd94 = $this->env->getExtension("native_profiler");
        $__internal_5da711258c24a5593d7687a45d5636d86cb350b1b840cbdbca26d195ab93fd94->enter($__internal_5da711258c24a5593d7687a45d5636d86cb350b1b840cbdbca26d195ab93fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
    <html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Evan's Hangar</title>

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <![endif]-->

    </head>



    <body>
    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "    </body>

 </html>";
        
        $__internal_5da711258c24a5593d7687a45d5636d86cb350b1b840cbdbca26d195ab93fd94->leave($__internal_5da711258c24a5593d7687a45d5636d86cb350b1b840cbdbca26d195ab93fd94_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9df55b410fc8c5e33ac2fd3c9a08cde52f051b20971c11726cc22cfd7e42e885 = $this->env->getExtension("native_profiler");
        $__internal_9df55b410fc8c5e33ac2fd3c9a08cde52f051b20971c11726cc22cfd7e42e885->enter($__internal_9df55b410fc8c5e33ac2fd3c9a08cde52f051b20971c11726cc22cfd7e42e885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_9df55b410fc8c5e33ac2fd3c9a08cde52f051b20971c11726cc22cfd7e42e885->leave($__internal_9df55b410fc8c5e33ac2fd3c9a08cde52f051b20971c11726cc22cfd7e42e885_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa7b428c97ff1fed546f45e05d30416c6c5f3f7d74a37df941d3ec022394abb6 = $this->env->getExtension("native_profiler");
        $__internal_fa7b428c97ff1fed546f45e05d30416c6c5f3f7d74a37df941d3ec022394abb6->enter($__internal_fa7b428c97ff1fed546f45e05d30416c6c5f3f7d74a37df941d3ec022394abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/products/"), "html", null, true);
        echo "\">Evan's Hangar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/about/"), "html", null, true);
        echo "\">About</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/services/"), "html", null, true);
        echo "\">Services</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/contact/"), "html", null, true);
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; This Is Fake 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "
    ";
        
        $__internal_fa7b428c97ff1fed546f45e05d30416c6c5f3f7d74a37df941d3ec022394abb6->leave($__internal_fa7b428c97ff1fed546f45e05d30416c6c5f3f7d74a37df941d3ec022394abb6_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6b5cd5abc614544b40fbbb214406c18a7b620e1edce0d0a0a00d091a7d4b0dc = $this->env->getExtension("native_profiler");
        $__internal_b6b5cd5abc614544b40fbbb214406c18a7b620e1edce0d0a0a00d091a7d4b0dc->enter($__internal_b6b5cd5abc614544b40fbbb214406c18a7b620e1edce0d0a0a00d091a7d4b0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script src=\"js/jquery.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>
    ";
        
        $__internal_b6b5cd5abc614544b40fbbb214406c18a7b620e1edce0d0a0a00d091a7d4b0dc->leave($__internal_b6b5cd5abc614544b40fbbb214406c18a7b620e1edce0d0a0a00d091a7d4b0dc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 86,  175 => 85,  167 => 92,  165 => 85,  135 => 58,  129 => 55,  123 => 52,  114 => 46,  100 => 34,  94 => 33,  85 => 20,  81 => 19,  75 => 16,  72 => 15,  66 => 14,  57 => 94,  55 => 33,  42 => 22,  40 => 14,  25 => 1,);
    }
}
/*  <!DOCTYPE html>*/
/*     <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Evan's Hangar</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <!-- Bootstrap Core CSS -->*/
/*             <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*             <!-- Custom CSS -->*/
/*             <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*         {% endblock %}*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <![endif]-->*/
/* */
/*     </head>*/
/* */
/* */
/* */
/*     <body>*/
/*     {% block body %}*/
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ asset('/products/') }}">Evan's Hangar</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{ asset('/about/') }}">About</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ asset('/services/') }}">Services</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ asset('/contact/') }}">Contact</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/* */
/*     <div class="container">*/
/* */
/*         <hr>*/
/* */
/*         <!-- Footer -->*/
/*         <footer>*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <p>Copyright &copy; This Is Fake 2016</p>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <!-- jQuery -->*/
/*     {% block javascripts %}*/
/*     <script src="js/jquery.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="js/bootstrap.min.js"></script>*/
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/*     </body>*/
/* */
/*  </html>*/
