<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5b35b4d1c2879f7ff018bf3ba60f8a5fc2d5132b80c0e1e4f69c1ae56a2ac101 extends Twig_Template
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
        $__internal_29e8181b327235f3cbb067d0f6a06b4abcbaa9ebf8972cc21a89b9fb112a53db = $this->env->getExtension("native_profiler");
        $__internal_29e8181b327235f3cbb067d0f6a06b4abcbaa9ebf8972cc21a89b9fb112a53db->enter($__internal_29e8181b327235f3cbb067d0f6a06b4abcbaa9ebf8972cc21a89b9fb112a53db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e8181b327235f3cbb067d0f6a06b4abcbaa9ebf8972cc21a89b9fb112a53db->leave($__internal_29e8181b327235f3cbb067d0f6a06b4abcbaa9ebf8972cc21a89b9fb112a53db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f62accd82c6ec666519d8fb399691da44a767100e634482539555c0bf64d3b0 = $this->env->getExtension("native_profiler");
        $__internal_2f62accd82c6ec666519d8fb399691da44a767100e634482539555c0bf64d3b0->enter($__internal_2f62accd82c6ec666519d8fb399691da44a767100e634482539555c0bf64d3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2f62accd82c6ec666519d8fb399691da44a767100e634482539555c0bf64d3b0->leave($__internal_2f62accd82c6ec666519d8fb399691da44a767100e634482539555c0bf64d3b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a06dc493cf66e2de0a5b72584036e4cf47d1c79fea71d90aa3b8db5f01b92827 = $this->env->getExtension("native_profiler");
        $__internal_a06dc493cf66e2de0a5b72584036e4cf47d1c79fea71d90aa3b8db5f01b92827->enter($__internal_a06dc493cf66e2de0a5b72584036e4cf47d1c79fea71d90aa3b8db5f01b92827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a06dc493cf66e2de0a5b72584036e4cf47d1c79fea71d90aa3b8db5f01b92827->leave($__internal_a06dc493cf66e2de0a5b72584036e4cf47d1c79fea71d90aa3b8db5f01b92827_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a3e11c8cb24d953e83c23c8bfafe87ba3c1890ff3aaa54548163c45a621d318 = $this->env->getExtension("native_profiler");
        $__internal_2a3e11c8cb24d953e83c23c8bfafe87ba3c1890ff3aaa54548163c45a621d318->enter($__internal_2a3e11c8cb24d953e83c23c8bfafe87ba3c1890ff3aaa54548163c45a621d318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2a3e11c8cb24d953e83c23c8bfafe87ba3c1890ff3aaa54548163c45a621d318->leave($__internal_2a3e11c8cb24d953e83c23c8bfafe87ba3c1890ff3aaa54548163c45a621d318_prof);

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
