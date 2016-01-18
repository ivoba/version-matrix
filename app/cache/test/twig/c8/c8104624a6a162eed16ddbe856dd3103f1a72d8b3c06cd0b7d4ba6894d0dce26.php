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
        $__internal_7f3cbe8d028f9d98c4e0813ccdfcc17d74ac047957af88d2ae1714da46f2182c = $this->env->getExtension("native_profiler");
        $__internal_7f3cbe8d028f9d98c4e0813ccdfcc17d74ac047957af88d2ae1714da46f2182c->enter($__internal_7f3cbe8d028f9d98c4e0813ccdfcc17d74ac047957af88d2ae1714da46f2182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

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
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>
";
        
        $__internal_7f3cbe8d028f9d98c4e0813ccdfcc17d74ac047957af88d2ae1714da46f2182c->leave($__internal_7f3cbe8d028f9d98c4e0813ccdfcc17d74ac047957af88d2ae1714da46f2182c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e649d2949e6dfec9765f604aa32580b041c6bbe02e191149cab21677f938c491 = $this->env->getExtension("native_profiler");
        $__internal_e649d2949e6dfec9765f604aa32580b041c6bbe02e191149cab21677f938c491->enter($__internal_e649d2949e6dfec9765f604aa32580b041c6bbe02e191149cab21677f938c491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_e649d2949e6dfec9765f604aa32580b041c6bbe02e191149cab21677f938c491->leave($__internal_e649d2949e6dfec9765f604aa32580b041c6bbe02e191149cab21677f938c491_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3ca944a235906605397f82c9616f3dac92a35b6962fb8cda7785097f340a700 = $this->env->getExtension("native_profiler");
        $__internal_f3ca944a235906605397f82c9616f3dac92a35b6962fb8cda7785097f340a700->enter($__internal_f3ca944a235906605397f82c9616f3dac92a35b6962fb8cda7785097f340a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f3ca944a235906605397f82c9616f3dac92a35b6962fb8cda7785097f340a700->leave($__internal_f3ca944a235906605397f82c9616f3dac92a35b6962fb8cda7785097f340a700_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_71027c4383545205a285b4d03b978064991bead9c5a1d09d4f34b92b1174a4c0 = $this->env->getExtension("native_profiler");
        $__internal_71027c4383545205a285b4d03b978064991bead9c5a1d09d4f34b92b1174a4c0->enter($__internal_71027c4383545205a285b4d03b978064991bead9c5a1d09d4f34b92b1174a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>Version Matrix</h1>

";
        
        $__internal_71027c4383545205a285b4d03b978064991bead9c5a1d09d4f34b92b1174a4c0->leave($__internal_71027c4383545205a285b4d03b978064991bead9c5a1d09d4f34b92b1174a4c0_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3a2ea05aa29832c9f5b02818ee8ae34c4be183730ed63606f689a81c78b10d6 = $this->env->getExtension("native_profiler");
        $__internal_e3a2ea05aa29832c9f5b02818ee8ae34c4be183730ed63606f689a81c78b10d6->enter($__internal_e3a2ea05aa29832c9f5b02818ee8ae34c4be183730ed63606f689a81c78b10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e3a2ea05aa29832c9f5b02818ee8ae34c4be183730ed63606f689a81c78b10d6->leave($__internal_e3a2ea05aa29832c9f5b02818ee8ae34c4be183730ed63606f689a81c78b10d6_prof);

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
        return array (  96 => 14,  87 => 11,  81 => 10,  70 => 6,  58 => 5,  49 => 15,  47 => 14,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*     <h1>Version Matrix</h1>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
