<?php

/* HomeBundle:Index:music23.html.twig */
class __TwigTemplate_c401d99f3ba2be0e477738a6d1f90dde686cbd1e7c919559a4166812225b5abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "HomeBundle:Index:music23.html.twig", 1);
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
        $__internal_9990ddbcd9c7e36c459f189e0e2ae5eca539be1ab425b540787d68ac391a4265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9990ddbcd9c7e36c459f189e0e2ae5eca539be1ab425b540787d68ac391a4265->enter($__internal_9990ddbcd9c7e36c459f189e0e2ae5eca539be1ab425b540787d68ac391a4265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Index:music23.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9990ddbcd9c7e36c459f189e0e2ae5eca539be1ab425b540787d68ac391a4265->leave($__internal_9990ddbcd9c7e36c459f189e0e2ae5eca539be1ab425b540787d68ac391a4265_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f60da2e21ab3f4e2be240279d9b6ac1beaafb03d7af97e8325707285e2d775c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f60da2e21ab3f4e2be240279d9b6ac1beaafb03d7af97e8325707285e2d775c->enter($__internal_1f60da2e21ab3f4e2be240279d9b6ac1beaafb03d7af97e8325707285e2d775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"caja\">
        <h1>Atchivos existentes en el directorio</h1>
    </div>
    <div class=\"caja\">
        <form method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_music24");
        echo "\" enctype=\"multipart/form-data\">
            <h1>Subiendo Archivos</h1>
            <input type=\"file\" name=\"archivo\" /><br />
            <input type=\"submit\" value=\"Subir Archivo\" name=\"boton\" />
        </form>
    </div>
    <div id=\"tw\">
        Tw
    </div>




    ";
        
        $__internal_1f60da2e21ab3f4e2be240279d9b6ac1beaafb03d7af97e8325707285e2d775c->leave($__internal_1f60da2e21ab3f4e2be240279d9b6ac1beaafb03d7af97e8325707285e2d775c_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Index:music23.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"caja\">
        <h1>Atchivos existentes en el directorio</h1>
    </div>
    <div class=\"caja\">
        <form method=\"post\" action=\"{{path('index_music24')}}\" enctype=\"multipart/form-data\">
            <h1>Subiendo Archivos</h1>
            <input type=\"file\" name=\"archivo\" /><br />
            <input type=\"submit\" value=\"Subir Archivo\" name=\"boton\" />
        </form>
    </div>
    <div id=\"tw\">
        Tw
    </div>




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

", "HomeBundle:Index:music23.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Index/music23.html.twig");
    }
}
