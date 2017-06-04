<?php

/* ::layout.html.twig */
class __TwigTemplate_d0d4a162594ab1fa26f3533f36fc907baa96c1a2587327815666c375b8b7457e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d75deed93a530db28781e1798940bdb788492b73ee05df252ef3c7d98c97f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d75deed93a530db28781e1798940bdb788492b73ee05df252ef3c7d98c97f6b->enter($__internal_0d75deed93a530db28781e1798940bdb788492b73ee05df252ef3c7d98c97f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    </body>
</html>";
        
        $__internal_0d75deed93a530db28781e1798940bdb788492b73ee05df252ef3c7d98c97f6b->leave($__internal_0d75deed93a530db28781e1798940bdb788492b73ee05df252ef3c7d98c97f6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26cd12e93e74ea8f1f1b053a2ad3e8e90e01d9a69f2c911c5eb7aac037cd4545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cd12e93e74ea8f1f1b053a2ad3e8e90e01d9a69f2c911c5eb7aac037cd4545->enter($__internal_26cd12e93e74ea8f1f1b053a2ad3e8e90e01d9a69f2c911c5eb7aac037cd4545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_26cd12e93e74ea8f1f1b053a2ad3e8e90e01d9a69f2c911c5eb7aac037cd4545->leave($__internal_26cd12e93e74ea8f1f1b053a2ad3e8e90e01d9a69f2c911c5eb7aac037cd4545_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_952de836831797ee37ec943a3a2361cc4872d59150c227d97272a0d59b71a5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952de836831797ee37ec943a3a2361cc4872d59150c227d97272a0d59b71a5d3->enter($__internal_952de836831797ee37ec943a3a2361cc4872d59150c227d97272a0d59b71a5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            
            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- MetisMenu CSS -->
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom Fonts -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            
            <!-- Librerias adicionales de la plantilla que inicialmente se implementó-->
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">            
            
        ";
        
        $__internal_952de836831797ee37ec943a3a2361cc4872d59150c227d97272a0d59b71a5d3->leave($__internal_952de836831797ee37ec943a3a2361cc4872d59150c227d97272a0d59b71a5d3_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80cbc2bcd9d33ad17c0c4e5d3985ff09af8e7a664a2fbd1b3760f2ff7dd2dde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cbc2bcd9d33ad17c0c4e5d3985ff09af8e7a664a2fbd1b3760f2ff7dd2dde0->enter($__internal_80cbc2bcd9d33ad17c0c4e5d3985ff09af8e7a664a2fbd1b3760f2ff7dd2dde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "
            <!-- jQuery -->
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

            <!-- Librerías adicionales de la plantilla que incialmente se implementó -->
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>            
            
        ";
        
        $__internal_80cbc2bcd9d33ad17c0c4e5d3985ff09af8e7a664a2fbd1b3760f2ff7dd2dde0->leave($__internal_80cbc2bcd9d33ad17c0c4e5d3985ff09af8e7a664a2fbd1b3760f2ff7dd2dde0_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b1b2598190e88e61fdad99bfd76fd6d5ec5de065b72f3f5d4b17cee74c3bf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1b2598190e88e61fdad99bfd76fd6d5ec5de065b72f3f5d4b17cee74c3bf79->enter($__internal_0b1b2598190e88e61fdad99bfd76fd6d5ec5de065b72f3f5d4b17cee74c3bf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "                ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
            ";
        }
        // line 53
        echo "        ";
        
        $__internal_0b1b2598190e88e61fdad99bfd76fd6d5ec5de065b72f3f5d4b17cee74c3bf79->leave($__internal_0b1b2598190e88e61fdad99bfd76fd6d5ec5de065b72f3f5d4b17cee74c3bf79_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  167 => 51,  164 => 50,  158 => 49,  148 => 46,  142 => 43,  136 => 40,  130 => 37,  124 => 34,  120 => 32,  114 => 29,  104 => 23,  98 => 20,  92 => 17,  86 => 14,  80 => 11,  76 => 9,  70 => 6,  58 => 5,  50 => 54,  47 => 49,  45 => 29,  38 => 26,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Asignación de tareas{% endblock %}</title>
        {% block stylesheets %}
{#            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\"/>#}
            
            <!-- Bootstrap Core CSS -->
            <link href=\"{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

            <!-- MetisMenu CSS -->
            <link href=\"{{ asset('public/vendor/metisMenu/metisMenu.min.css') }}\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"{{ asset('public/dist/css/sb-admin-2.css') }}\" rel=\"stylesheet\">

            <!-- Custom Fonts -->
            <link href=\"{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            
            <!-- Librerias adicionales de la plantilla que inicialmente se implementó-->
            <link href=\"{{ asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}\" rel=\"stylesheet\">            
            
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block javascripts %}
{#            <script src=\"{{ asset('public/js/jquery-3.2.0.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>#}

            <!-- jQuery -->
            <script src=\"{{ asset('public/vendor/jquery/jquery.min.js') }}\"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\"{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"{{ asset('public/vendor/metisMenu/metisMenu.min.js') }}\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"{{ asset('public/dist/js/sb-admin-2.js') }}\"></script>

            <!-- Librerías adicionales de la plantilla que incialmente se implementó -->
            <script src=\"{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}\"></script>            
            
        {% endblock %}
        {% block body %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {{ include('menu.html.twig') }}
            {% endif %}
        {% endblock %}
    </body>
</html>", "::layout.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/app/Resources/views/layout.html.twig");
    }
}
