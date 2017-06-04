<?php

/* HomeBundle:Index:sigIn.html.twig */
class __TwigTemplate_6fa2493dca8b3fbf7e4f1153bdfcadedd039b5af96fbd3994fcddd7a8a080a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "HomeBundle:Index:sigIn.html.twig", 1);
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
        $__internal_bc80379804252ae1f99458643936f9d75e294418c84e45eb93fbc04ce0265eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc80379804252ae1f99458643936f9d75e294418c84e45eb93fbc04ce0265eed->enter($__internal_bc80379804252ae1f99458643936f9d75e294418c84e45eb93fbc04ce0265eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Index:sigIn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc80379804252ae1f99458643936f9d75e294418c84e45eb93fbc04ce0265eed->leave($__internal_bc80379804252ae1f99458643936f9d75e294418c84e45eb93fbc04ce0265eed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_65436c58592c0c33099990660567ae37ea0dcdffed2e21a5be9fdbeb46f85a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65436c58592c0c33099990660567ae37ea0dcdffed2e21a5be9fdbeb46f85a19->enter($__internal_65436c58592c0c33099990660567ae37ea0dcdffed2e21a5be9fdbeb46f85a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-4\">
                <center>
                    <div class=\"page-header\">
                        <h2>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("NEON", array(), "messages");
        echo "</h2>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td><label style=\"width: 80px;\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
        echo "</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Username\" />
                            <tr>
                                <td><label style=\"width: 80px;\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("First Name", array(), "messages");
        echo "</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"First Name\" />
                            <tr>
                                <td><label style=\"width: 80px;\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Last Name", array(), "messages");
        echo "</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Last Name\" />
                            <tr>
                                <td><label style=\"width: 80px;\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Email", array(), "messages");
        echo "</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"userInputLogin\" placeholder=\"Email\" />
                            <tr>
                                <td><label style=\"width: 80px;\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Password", array(), "messages");
        echo "</label>
                                <td colspan=\"2\"><input style=\"width: 180px;\" type=\"text\" id=\"passwordInputTextLogin\" placeholder=\"Password\" />
                            <tr>
                                <td colspan=\"3\"><br>
                            <tr>
                                <td>
                                <td>
                                <td align=\"right\">
                                    <form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_logIn");
        echo "\">
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
    </div>
";
        
        $__internal_65436c58592c0c33099990660567ae37ea0dcdffed2e21a5be9fdbeb46f85a19->leave($__internal_65436c58592c0c33099990660567ae37ea0dcdffed2e21a5be9fdbeb46f85a19_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Index:sigIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  82 => 26,  76 => 23,  70 => 20,  64 => 17,  58 => 14,  50 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"main container\">
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
    </div>
{% endblock %}", "HomeBundle:Index:sigIn.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Index/sigIn.html.twig");
    }
}
