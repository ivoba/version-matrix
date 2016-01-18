<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_02c8b9f600143373dd9f78f9b2e2cb8cff729cf24dfc8d493673735f1fa83ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28793e442f887a90b24588b717d65c633e15bd76e59e0ff925afb57185b9e208 = $this->env->getExtension("native_profiler");
        $__internal_28793e442f887a90b24588b717d65c633e15bd76e59e0ff925afb57185b9e208->enter($__internal_28793e442f887a90b24588b717d65c633e15bd76e59e0ff925afb57185b9e208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</body>
</html>
";
        
        $__internal_28793e442f887a90b24588b717d65c633e15bd76e59e0ff925afb57185b9e208->leave($__internal_28793e442f887a90b24588b717d65c633e15bd76e59e0ff925afb57185b9e208_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8793cf03eb67aeaeb601fd3cc712f04be0b810eb2ef687d2c457e072c86104e2 = $this->env->getExtension("native_profiler");
        $__internal_8793cf03eb67aeaeb601fd3cc712f04be0b810eb2ef687d2c457e072c86104e2->enter($__internal_8793cf03eb67aeaeb601fd3cc712f04be0b810eb2ef687d2c457e072c86104e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_8793cf03eb67aeaeb601fd3cc712f04be0b810eb2ef687d2c457e072c86104e2->leave($__internal_8793cf03eb67aeaeb601fd3cc712f04be0b810eb2ef687d2c457e072c86104e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed54c8c82db7fba5270efde850ba15371c2e9c0eb59189a1bd10442b0cdf62bf = $this->env->getExtension("native_profiler");
        $__internal_ed54c8c82db7fba5270efde850ba15371c2e9c0eb59189a1bd10442b0cdf62bf->enter($__internal_ed54c8c82db7fba5270efde850ba15371c2e9c0eb59189a1bd10442b0cdf62bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ed54c8c82db7fba5270efde850ba15371c2e9c0eb59189a1bd10442b0cdf62bf->leave($__internal_ed54c8c82db7fba5270efde850ba15371c2e9c0eb59189a1bd10442b0cdf62bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_911a0be5b5f80cdc0a603158871efa17d299f04f4259f29e10cf46e0cb8f2cd8 = $this->env->getExtension("native_profiler");
        $__internal_911a0be5b5f80cdc0a603158871efa17d299f04f4259f29e10cf46e0cb8f2cd8->enter($__internal_911a0be5b5f80cdc0a603158871efa17d299f04f4259f29e10cf46e0cb8f2cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    Welcome to your Symfony Micro-Framework.
";
        
        $__internal_911a0be5b5f80cdc0a603158871efa17d299f04f4259f29e10cf46e0cb8f2cd8->leave($__internal_911a0be5b5f80cdc0a603158871efa17d299f04f4259f29e10cf46e0cb8f2cd8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a5b2cca85d1e42fd2cddd013a571b3ca2d0dea407a4d60a367733331bdf3c15 = $this->env->getExtension("native_profiler");
        $__internal_7a5b2cca85d1e42fd2cddd013a571b3ca2d0dea407a4d60a367733331bdf3c15->enter($__internal_7a5b2cca85d1e42fd2cddd013a571b3ca2d0dea407a4d60a367733331bdf3c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a5b2cca85d1e42fd2cddd013a571b3ca2d0dea407a4d60a367733331bdf3c15->leave($__internal_7a5b2cca85d1e42fd2cddd013a571b3ca2d0dea407a4d60a367733331bdf3c15_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  87 => 11,  81 => 10,  70 => 6,  58 => 5,  49 => 14,  47 => 13,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Welcome{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*     Welcome to your Symfony Micro-Framework.*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
