<?php

/* HomeBundle:Home:editCloth.html.twig */
class __TwigTemplate_c297a87e8712ba6fb4272d6b95d6acdcc1bb0e993f8974dff8131c0dac27b34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb903ac32e005da11afb109cc8fe495a43460fdabe171883df2fdfda3ed7d583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb903ac32e005da11afb109cc8fe495a43460fdabe171883df2fdfda3ed7d583->enter($__internal_bb903ac32e005da11afb109cc8fe495a43460fdabe171883df2fdfda3ed7d583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Home:editCloth.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-xs-12 col-sm-12 col-md-8 col-lg-8\" style=\"background-color: white;\">
        <table width=\"100%\" border=\"0\">
            <tr>
                <td>
                    ";
        // line 6
        echo twig_include($this->env, $context, "HomeBundle:Home:board.html.twig");
        echo "
                </td>
            <tr>
                <td>
                    ";
        // line 10
        echo twig_include($this->env, $context, "HomeBundle:Home:video.html.twig");
        echo "
                </td>
            </tr>
        </table>
                
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\" style=\"background-color: white;\">
        <table width=\"100%\" style=\"background-color: white;\" border=\"0\">
            <tr>
                <td>
                    ";
        // line 20
        echo twig_include($this->env, $context, "HomeBundle:Home:editClothPiece.html.twig", array("form3" =>         // line 21
(isset($context["add_cloth_type_form_ajax"]) ? $context["add_cloth_type_form_ajax"] : $this->getContext($context, "add_cloth_type_form_ajax")), "id3" => "add-cloth-type"));
        // line 23
        echo "
                </td>
            </tr>
        </table>
    </div>
</div>";
        
        $__internal_bb903ac32e005da11afb109cc8fe495a43460fdabe171883df2fdfda3ed7d583->leave($__internal_bb903ac32e005da11afb109cc8fe495a43460fdabe171883df2fdfda3ed7d583_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Home:editCloth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  50 => 21,  49 => 20,  36 => 10,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-xs-12 col-sm-12 col-md-8 col-lg-8\" style=\"background-color: white;\">
        <table width=\"100%\" border=\"0\">
            <tr>
                <td>
                    {{ include('HomeBundle:Home:board.html.twig') }}
                </td>
            <tr>
                <td>
                    {{ include('HomeBundle:Home:video.html.twig') }}
                </td>
            </tr>
        </table>
                
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\" style=\"background-color: white;\">
        <table width=\"100%\" style=\"background-color: white;\" border=\"0\">
            <tr>
                <td>
                    {{ include('HomeBundle:Home:editClothPiece.html.twig', { 
            form3: add_cloth_type_form_ajax,
            id3: 'add-cloth-type'
            }) }}
                </td>
            </tr>
        </table>
    </div>
</div>", "HomeBundle:Home:editCloth.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Home/editCloth.html.twig");
    }
}
