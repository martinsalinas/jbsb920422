<?php

/* HomeBundle:Index:music.html.twig */
class __TwigTemplate_be686dfe5b9a2ef44e96b8be4cda76ec20e6c3e40a49732d1faac5fc60f42b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "HomeBundle:Index:music.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65dbc48a351a9e05e747aa096fd53a6449255979e910fdec8d93d6b0c78ba6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dbc48a351a9e05e747aa096fd53a6449255979e910fdec8d93d6b0c78ba6a6->enter($__internal_65dbc48a351a9e05e747aa096fd53a6449255979e910fdec8d93d6b0c78ba6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Index:music.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65dbc48a351a9e05e747aa096fd53a6449255979e910fdec8d93d6b0c78ba6a6->leave($__internal_65dbc48a351a9e05e747aa096fd53a6449255979e910fdec8d93d6b0c78ba6a6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7624d0acad28589ddccc0ff9982e6d0d38ffbd1149b322845f5e2fdd28b6dc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7624d0acad28589ddccc0ff9982e6d0d38ffbd1149b322845f5e2fdd28b6dc35->enter($__internal_7624d0acad28589ddccc0ff9982e6d0d38ffbd1149b322845f5e2fdd28b6dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_music22");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"file\" name=\"foto\" />
        <input type=\"submit\" value=\"Upload\"/>
    </form>




    ";
        
        $__internal_7624d0acad28589ddccc0ff9982e6d0d38ffbd1149b322845f5e2fdd28b6dc35->leave($__internal_7624d0acad28589ddccc0ff9982e6d0d38ffbd1149b322845f5e2fdd28b6dc35_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Index:music.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block body %}
    {{ parent() }}

    <form action=\"{{path('index_music22')}}\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"file\" name=\"foto\" />
        <input type=\"submit\" value=\"Upload\"/>
    </form>




    {#    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-4\">
                <center>
                    <div class=\"page-header\">
                        <h2>{% trans %}NEON{% endtrans %}</h2>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td><label style=\"width: 80px;\">{% trans %}Username{% endtrans %}</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Username\" />
                            <tr>
                                <td><label style=\"width: 80px;\">{% trans %}First Name{% endtrans %}</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"First Name\" />
                            <tr>
                                <td><label style=\"width: 80px;\">{% trans %}Last Name{% endtrans %}</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Last Name\" />
                            <tr>
                                <td><label style=\"width: 80px;\">{% trans %}Email{% endtrans %}</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Email\" />
                            <tr>
                                <td><label style=\"width: 80px;\">{% trans %}Password{% endtrans %}</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"passwordInputTextLogin\" placeholder=\"Password\" />
                            <tr>
                                <td colspan=\"3\"><br>
                            <tr>
                                <td>
                                <td>
                                <td align=\"right\">
                                    <form class=\"form-horizontal\" method=\"post\" action=\"{{path('index_logIn')}}\">
                                        <input type=\"submit\" value=\"Log in\" id=\"loginInputSubmitLogin\">
                                    </form>
                                </td>
                            <tr>
                                <td colspan=\"3\"><br>
                            </tr>
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>#}
{% endblock %}

", "HomeBundle:Index:music.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Index/music.html.twig");
    }
}
