<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ad7f634eddfcf806b357de799a1e08e5c4ee5f3fccbcc4ee095f04054fd78d0f extends Twig_Template
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
        $__internal_26765c82bd76d64ea6167b6909a4a586dfa697f88a37719cf4758e8b5651f028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26765c82bd76d64ea6167b6909a4a586dfa697f88a37719cf4758e8b5651f028->enter($__internal_26765c82bd76d64ea6167b6909a4a586dfa697f88a37719cf4758e8b5651f028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26765c82bd76d64ea6167b6909a4a586dfa697f88a37719cf4758e8b5651f028->leave($__internal_26765c82bd76d64ea6167b6909a4a586dfa697f88a37719cf4758e8b5651f028_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00731d404239b9c446c81920aea5a0d7c9b45f52b8332d1db395329b66b937c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00731d404239b9c446c81920aea5a0d7c9b45f52b8332d1db395329b66b937c8->enter($__internal_00731d404239b9c446c81920aea5a0d7c9b45f52b8332d1db395329b66b937c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_00731d404239b9c446c81920aea5a0d7c9b45f52b8332d1db395329b66b937c8->leave($__internal_00731d404239b9c446c81920aea5a0d7c9b45f52b8332d1db395329b66b937c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c155165ef1b596fd9788a4ecdbae4907727cb31b56d65015bc8fdf713a97368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c155165ef1b596fd9788a4ecdbae4907727cb31b56d65015bc8fdf713a97368->enter($__internal_3c155165ef1b596fd9788a4ecdbae4907727cb31b56d65015bc8fdf713a97368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c155165ef1b596fd9788a4ecdbae4907727cb31b56d65015bc8fdf713a97368->leave($__internal_3c155165ef1b596fd9788a4ecdbae4907727cb31b56d65015bc8fdf713a97368_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72f6200d0a50f6abb845d7023fb33eefdbc6a1e3eee7409647da67c9a2b76fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f6200d0a50f6abb845d7023fb33eefdbc6a1e3eee7409647da67c9a2b76fd5->enter($__internal_72f6200d0a50f6abb845d7023fb33eefdbc6a1e3eee7409647da67c9a2b76fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_72f6200d0a50f6abb845d7023fb33eefdbc6a1e3eee7409647da67c9a2b76fd5->leave($__internal_72f6200d0a50f6abb845d7023fb33eefdbc6a1e3eee7409647da67c9a2b76fd5_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
