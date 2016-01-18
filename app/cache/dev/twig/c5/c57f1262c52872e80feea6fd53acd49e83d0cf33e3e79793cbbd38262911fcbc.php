<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9480b563e055bcf9a6d9950744019bca2b2fcf441baddafd268e1c080ae385ab extends Twig_Template
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
        $__internal_6e1f2eb0c23314caea3c64a918a304b700e92d38405dec383b0be444a23c7bfd = $this->env->getExtension("native_profiler");
        $__internal_6e1f2eb0c23314caea3c64a918a304b700e92d38405dec383b0be444a23c7bfd->enter($__internal_6e1f2eb0c23314caea3c64a918a304b700e92d38405dec383b0be444a23c7bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e1f2eb0c23314caea3c64a918a304b700e92d38405dec383b0be444a23c7bfd->leave($__internal_6e1f2eb0c23314caea3c64a918a304b700e92d38405dec383b0be444a23c7bfd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fb0a524359b8077253901fbb52db31a9ff522ab7313bb6ee49b623a5c02e53b = $this->env->getExtension("native_profiler");
        $__internal_4fb0a524359b8077253901fbb52db31a9ff522ab7313bb6ee49b623a5c02e53b->enter($__internal_4fb0a524359b8077253901fbb52db31a9ff522ab7313bb6ee49b623a5c02e53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4fb0a524359b8077253901fbb52db31a9ff522ab7313bb6ee49b623a5c02e53b->leave($__internal_4fb0a524359b8077253901fbb52db31a9ff522ab7313bb6ee49b623a5c02e53b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66e2228b9ddb480464ce5cefb499f105df3851c4710933054c909de4107b78cd = $this->env->getExtension("native_profiler");
        $__internal_66e2228b9ddb480464ce5cefb499f105df3851c4710933054c909de4107b78cd->enter($__internal_66e2228b9ddb480464ce5cefb499f105df3851c4710933054c909de4107b78cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66e2228b9ddb480464ce5cefb499f105df3851c4710933054c909de4107b78cd->leave($__internal_66e2228b9ddb480464ce5cefb499f105df3851c4710933054c909de4107b78cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5731d8cda2f630cc6e2880f85a8b7676ed1cdccd8e57f325ac35b034d35f4458 = $this->env->getExtension("native_profiler");
        $__internal_5731d8cda2f630cc6e2880f85a8b7676ed1cdccd8e57f325ac35b034d35f4458->enter($__internal_5731d8cda2f630cc6e2880f85a8b7676ed1cdccd8e57f325ac35b034d35f4458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_5731d8cda2f630cc6e2880f85a8b7676ed1cdccd8e57f325ac35b034d35f4458->leave($__internal_5731d8cda2f630cc6e2880f85a8b7676ed1cdccd8e57f325ac35b034d35f4458_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
