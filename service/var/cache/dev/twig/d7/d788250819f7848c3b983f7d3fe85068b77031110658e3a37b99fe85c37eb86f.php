<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8dd2bf3fc8664798478d5119443df5fb584198f14bba508ebd33810057569c2e extends Twig_Template
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
        $__internal_cc8288eb14c045d9cb2be08428f5c874a177eea8c5f2c6b2e8caf5671583542a = $this->env->getExtension("native_profiler");
        $__internal_cc8288eb14c045d9cb2be08428f5c874a177eea8c5f2c6b2e8caf5671583542a->enter($__internal_cc8288eb14c045d9cb2be08428f5c874a177eea8c5f2c6b2e8caf5671583542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8288eb14c045d9cb2be08428f5c874a177eea8c5f2c6b2e8caf5671583542a->leave($__internal_cc8288eb14c045d9cb2be08428f5c874a177eea8c5f2c6b2e8caf5671583542a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e118d0330b2292e434b49b5fabf272df505286f5d849f2b6cbd16ff38156a4e = $this->env->getExtension("native_profiler");
        $__internal_9e118d0330b2292e434b49b5fabf272df505286f5d849f2b6cbd16ff38156a4e->enter($__internal_9e118d0330b2292e434b49b5fabf272df505286f5d849f2b6cbd16ff38156a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e118d0330b2292e434b49b5fabf272df505286f5d849f2b6cbd16ff38156a4e->leave($__internal_9e118d0330b2292e434b49b5fabf272df505286f5d849f2b6cbd16ff38156a4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_257db06984296191c1a6bde5314bd44b5fe291af516e48519b8704a8f5d288d9 = $this->env->getExtension("native_profiler");
        $__internal_257db06984296191c1a6bde5314bd44b5fe291af516e48519b8704a8f5d288d9->enter($__internal_257db06984296191c1a6bde5314bd44b5fe291af516e48519b8704a8f5d288d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_257db06984296191c1a6bde5314bd44b5fe291af516e48519b8704a8f5d288d9->leave($__internal_257db06984296191c1a6bde5314bd44b5fe291af516e48519b8704a8f5d288d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_118c17893c935253ff5d03a6d0b83f07047f12dba8a15887f0a67059420dd725 = $this->env->getExtension("native_profiler");
        $__internal_118c17893c935253ff5d03a6d0b83f07047f12dba8a15887f0a67059420dd725->enter($__internal_118c17893c935253ff5d03a6d0b83f07047f12dba8a15887f0a67059420dd725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_118c17893c935253ff5d03a6d0b83f07047f12dba8a15887f0a67059420dd725->leave($__internal_118c17893c935253ff5d03a6d0b83f07047f12dba8a15887f0a67059420dd725_prof);

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
