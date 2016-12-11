<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c55ff13ca8b773a3ce67a3506221c5dbed291d1570f132fbf93be3e49fb0c87e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da478f47c804eac9fc68911f38f71467f372ec8887637fb2f3549ea1e7d028d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da478f47c804eac9fc68911f38f71467f372ec8887637fb2f3549ea1e7d028d0->enter($__internal_da478f47c804eac9fc68911f38f71467f372ec8887637fb2f3549ea1e7d028d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da478f47c804eac9fc68911f38f71467f372ec8887637fb2f3549ea1e7d028d0->leave($__internal_da478f47c804eac9fc68911f38f71467f372ec8887637fb2f3549ea1e7d028d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f74903d31bf17811539e410ed849188bdfe5189585550728190b12e019bfb12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74903d31bf17811539e410ed849188bdfe5189585550728190b12e019bfb12c->enter($__internal_f74903d31bf17811539e410ed849188bdfe5189585550728190b12e019bfb12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f74903d31bf17811539e410ed849188bdfe5189585550728190b12e019bfb12c->leave($__internal_f74903d31bf17811539e410ed849188bdfe5189585550728190b12e019bfb12c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_697bd4b7d13c2ee199d54f3fa75c155a5f5aeb066c7f92885f826c79286b3973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697bd4b7d13c2ee199d54f3fa75c155a5f5aeb066c7f92885f826c79286b3973->enter($__internal_697bd4b7d13c2ee199d54f3fa75c155a5f5aeb066c7f92885f826c79286b3973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_697bd4b7d13c2ee199d54f3fa75c155a5f5aeb066c7f92885f826c79286b3973->leave($__internal_697bd4b7d13c2ee199d54f3fa75c155a5f5aeb066c7f92885f826c79286b3973_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68d7468ae7f192d0526efdc3ee1077673c580b2fb98dffa5860a319066e57e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d7468ae7f192d0526efdc3ee1077673c580b2fb98dffa5860a319066e57e40->enter($__internal_68d7468ae7f192d0526efdc3ee1077673c580b2fb98dffa5860a319066e57e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68d7468ae7f192d0526efdc3ee1077673c580b2fb98dffa5860a319066e57e40->leave($__internal_68d7468ae7f192d0526efdc3ee1077673c580b2fb98dffa5860a319066e57e40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
