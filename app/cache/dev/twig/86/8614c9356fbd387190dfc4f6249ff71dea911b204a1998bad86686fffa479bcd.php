<?php

/* HomeBundle:Home:welcome.html.twig */
class __TwigTemplate_edb409c1d75c64370f052337e0aac775334274618c31c90a7ac6865c159d1d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "HomeBundle:Home:welcome.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd90a075938a9e03ec2033e27205a5548694f5e54f473182fd3cbfea8e82ee36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd90a075938a9e03ec2033e27205a5548694f5e54f473182fd3cbfea8e82ee36->enter($__internal_cd90a075938a9e03ec2033e27205a5548694f5e54f473182fd3cbfea8e82ee36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Home:welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd90a075938a9e03ec2033e27205a5548694f5e54f473182fd3cbfea8e82ee36->leave($__internal_cd90a075938a9e03ec2033e27205a5548694f5e54f473182fd3cbfea8e82ee36_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac1c09adfd2f8358c6fd7b669db30e2b2a22cac19a695282adf5a52b99bd908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac1c09adfd2f8358c6fd7b669db30e2b2a22cac19a695282adf5a52b99bd908->enter($__internal_cac1c09adfd2f8358c6fd7b669db30e2b2a22cac19a695282adf5a52b99bd908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 6
        echo "        <div style=\"background-color: green;\">
";
        // line 27
        echo "            <div class=\"col-md-0\" style=\"background-color: white;\">
                ";
        // line 28
        echo twig_include($this->env, $context, "HomeBundle:Home:editCloth.html.twig");
        echo "
            </div>
        </div>
";
        
        $__internal_cac1c09adfd2f8358c6fd7b669db30e2b2a22cac19a695282adf5a52b99bd908->leave($__internal_cac1c09adfd2f8358c6fd7b669db30e2b2a22cac19a695282adf5a52b99bd908_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Home:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 28,  48 => 27,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %}
{% block body %}
    {{ parent() }}
{#    <div class=\"main container\">#}
{#        <div class=\"row well\" style=\"background-color: white;\">#}
        <div style=\"background-color: green;\">
{#            <br>
            <div class=\"col-md-0\" style=\"background-color: white;\">
                <table border=\"0\" width=\"100%\">
                    <tr>
                        <td width=\"180px\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Username\" />
                        <td width=\"10px\">
                        <td width=\"180px\"><input style=\"width: 180px;\" type=\"text\" id=\"passwordInputTextLogin\" placeholder=\"Password\" />
                        <td width=\"10px\">
                        <td width=\"56px\" align=\"right\">
                            <form class=\"form-horizontal\" method=\"post\" action=\"{{path('index_logIn')}}\">
                                <input type=\"submit\" value=\"Log in\" id=\"loginInputSubmitLogin\">
                            </form>
                        <td width=\"10px\">
                        <td width=\"125px\"><a href=\"{{ path('index_sigIn') }}\">Sig in</a>
                        <td align=\"center\">
                            <text style=\"color: purple;\"><b>{% trans %}jbSB92{% endtrans %}</b></text>
                        </td>
                    </tr>
                </table>
            </div>#}
            <div class=\"col-md-0\" style=\"background-color: white;\">
                {{ include('HomeBundle:Home:editCloth.html.twig') }}
            </div>
        </div>
{#        </div>#}
{#    </div>#}
{% endblock %}", "HomeBundle:Home:welcome.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Home/welcome.html.twig");
    }
}
