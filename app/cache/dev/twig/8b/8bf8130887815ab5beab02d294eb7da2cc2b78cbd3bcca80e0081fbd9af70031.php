<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_de4c3d5935526e700f99d773c8e12ac0d477d79210c4a6af494a0a2187c6226e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb40cbd6262ff1a9e18e085978dbd61d751d458f0fdfb00faa5c0f5b87e27c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb40cbd6262ff1a9e18e085978dbd61d751d458f0fdfb00faa5c0f5b87e27c88->enter($__internal_bb40cbd6262ff1a9e18e085978dbd61d751d458f0fdfb00faa5c0f5b87e27c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb40cbd6262ff1a9e18e085978dbd61d751d458f0fdfb00faa5c0f5b87e27c88->leave($__internal_bb40cbd6262ff1a9e18e085978dbd61d751d458f0fdfb00faa5c0f5b87e27c88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61da33005fe0f8525cb2d3e45392336c1b2c91739e2dba319795b3d623c4abf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61da33005fe0f8525cb2d3e45392336c1b2c91739e2dba319795b3d623c4abf8->enter($__internal_61da33005fe0f8525cb2d3e45392336c1b2c91739e2dba319795b3d623c4abf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61da33005fe0f8525cb2d3e45392336c1b2c91739e2dba319795b3d623c4abf8->leave($__internal_61da33005fe0f8525cb2d3e45392336c1b2c91739e2dba319795b3d623c4abf8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b467ae8cc47d442d62f44d3a5931f25b3a0a325c8cc53317fd6aac1f5e86c865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b467ae8cc47d442d62f44d3a5931f25b3a0a325c8cc53317fd6aac1f5e86c865->enter($__internal_b467ae8cc47d442d62f44d3a5931f25b3a0a325c8cc53317fd6aac1f5e86c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b467ae8cc47d442d62f44d3a5931f25b3a0a325c8cc53317fd6aac1f5e86c865->leave($__internal_b467ae8cc47d442d62f44d3a5931f25b3a0a325c8cc53317fd6aac1f5e86c865_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab996111674c157ab1819f9ebbadff8a3f7d1fd1b29d25d072074d74ed9388b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab996111674c157ab1819f9ebbadff8a3f7d1fd1b29d25d072074d74ed9388b->enter($__internal_1ab996111674c157ab1819f9ebbadff8a3f7d1fd1b29d25d072074d74ed9388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ab996111674c157ab1819f9ebbadff8a3f7d1fd1b29d25d072074d74ed9388b->leave($__internal_1ab996111674c157ab1819f9ebbadff8a3f7d1fd1b29d25d072074d74ed9388b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
