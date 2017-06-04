<?php

/* HomeBundle:Home:board.html.twig */
class __TwigTemplate_6df4fea10832695d745cf8b1dec6a74d669764b58b7872db3f7befd1bbf58231 extends Twig_Template
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
        $__internal_e0db338ad94dfc67d8ba955ffe54e158a5178005816d50ef005a1aeece5f5706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0db338ad94dfc67d8ba955ffe54e158a5178005816d50ef005a1aeece5f5706->enter($__internal_e0db338ad94dfc67d8ba955ffe54e158a5178005816d50ef005a1aeece5f5706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Home:board.html.twig"));

        // line 1
        echo "<table width=\"100%\" style=\"background-color: white;\" border=\"0\">
    <tr>
        <td width=\"50%\">
            <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_video");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <input type=\"file\" name=\"foto\" />
                <input type=\"submit\" value=\"Upload\"/>
            </form>
        </td>
    </tr>
</table>";
        
        $__internal_e0db338ad94dfc67d8ba955ffe54e158a5178005816d50ef005a1aeece5f5706->leave($__internal_e0db338ad94dfc67d8ba955ffe54e158a5178005816d50ef005a1aeece5f5706_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Home:board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table width=\"100%\" style=\"background-color: white;\" border=\"0\">
    <tr>
        <td width=\"50%\">
            <form action=\"{{path('index_video')}}\" method=\"post\" enctype=\"multipart/form-data\">
                <input type=\"file\" name=\"foto\" />
                <input type=\"submit\" value=\"Upload\"/>
            </form>
        </td>
    </tr>
</table>", "HomeBundle:Home:board.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Home/board.html.twig");
    }
}
