<?php

/* blog/index.html.twig */
class __TwigTemplate_8ae452b8cdca847a6862257313f285f1de3bc81c7d6ac86e5aa26b24b0d7058c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3b1edd1d0f775dfdb32e7ab320396a06370bf2fa849feded9f33d0f47461d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b1edd1d0f775dfdb32e7ab320396a06370bf2fa849feded9f33d0f47461d47->enter($__internal_a3b1edd1d0f775dfdb32e7ab320396a06370bf2fa849feded9f33d0f47461d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b1edd1d0f775dfdb32e7ab320396a06370bf2fa849feded9f33d0f47461d47->leave($__internal_a3b1edd1d0f775dfdb32e7ab320396a06370bf2fa849feded9f33d0f47461d47_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_218c9ec120c583323f5735ca14de5659e6e3292e368f6ca67f66715679ab883f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218c9ec120c583323f5735ca14de5659e6e3292e368f6ca67f66715679ab883f->enter($__internal_218c9ec120c583323f5735ca14de5659e6e3292e368f6ca67f66715679ab883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_218c9ec120c583323f5735ca14de5659e6e3292e368f6ca67f66715679ab883f->leave($__internal_218c9ec120c583323f5735ca14de5659e6e3292e368f6ca67f66715679ab883f_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

{% endblock %}
";
    }
}
