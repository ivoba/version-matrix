<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3292db599cb168e32d95e68e5c6fd379b9bcb68827c9f1938e8e1d9a47ac82f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9d113567979510fe2362f93f95061e24fd515b76afc5b677b7795f3dc356751a = $this->env->getExtension("native_profiler");
        $__internal_9d113567979510fe2362f93f95061e24fd515b76afc5b677b7795f3dc356751a->enter($__internal_9d113567979510fe2362f93f95061e24fd515b76afc5b677b7795f3dc356751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d113567979510fe2362f93f95061e24fd515b76afc5b677b7795f3dc356751a->leave($__internal_9d113567979510fe2362f93f95061e24fd515b76afc5b677b7795f3dc356751a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f988d0e1955c06a6f9aadd33ebf6665512d65e15a2627579eb45cc76161b3c50 = $this->env->getExtension("native_profiler");
        $__internal_f988d0e1955c06a6f9aadd33ebf6665512d65e15a2627579eb45cc76161b3c50->enter($__internal_f988d0e1955c06a6f9aadd33ebf6665512d65e15a2627579eb45cc76161b3c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f988d0e1955c06a6f9aadd33ebf6665512d65e15a2627579eb45cc76161b3c50->leave($__internal_f988d0e1955c06a6f9aadd33ebf6665512d65e15a2627579eb45cc76161b3c50_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8055b2eb369310b7b61fcbac176e4b15182cea54399cb238d1304af5d2b2bd3 = $this->env->getExtension("native_profiler");
        $__internal_d8055b2eb369310b7b61fcbac176e4b15182cea54399cb238d1304af5d2b2bd3->enter($__internal_d8055b2eb369310b7b61fcbac176e4b15182cea54399cb238d1304af5d2b2bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d8055b2eb369310b7b61fcbac176e4b15182cea54399cb238d1304af5d2b2bd3->leave($__internal_d8055b2eb369310b7b61fcbac176e4b15182cea54399cb238d1304af5d2b2bd3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d329f59bc0c0fb7e469add61f820d76deddbe0ce5e172e57ae85315af7846c1b = $this->env->getExtension("native_profiler");
        $__internal_d329f59bc0c0fb7e469add61f820d76deddbe0ce5e172e57ae85315af7846c1b->enter($__internal_d329f59bc0c0fb7e469add61f820d76deddbe0ce5e172e57ae85315af7846c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
        
        $__internal_d329f59bc0c0fb7e469add61f820d76deddbe0ce5e172e57ae85315af7846c1b->leave($__internal_d329f59bc0c0fb7e469add61f820d76deddbe0ce5e172e57ae85315af7846c1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
