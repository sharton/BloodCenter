<?php

/* base.html.twig */
class __TwigTemplate_e37118a5532245455c45d0e810d0e8145d2dbbc03d968b62fba8de1b401536d7 extends Twig_Template
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
        $__internal_b0a1d52e960bec731243cc835eee053f3e80806f1bec1bb60bb695551b6a52e5 = $this->env->getExtension("native_profiler");
        $__internal_b0a1d52e960bec731243cc835eee053f3e80806f1bec1bb60bb695551b6a52e5->enter($__internal_b0a1d52e960bec731243cc835eee053f3e80806f1bec1bb60bb695551b6a52e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b0a1d52e960bec731243cc835eee053f3e80806f1bec1bb60bb695551b6a52e5->leave($__internal_b0a1d52e960bec731243cc835eee053f3e80806f1bec1bb60bb695551b6a52e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08d6174a8973f875c44ed13756f4d960e4204733a17f4632246ce79ede3900bb = $this->env->getExtension("native_profiler");
        $__internal_08d6174a8973f875c44ed13756f4d960e4204733a17f4632246ce79ede3900bb->enter($__internal_08d6174a8973f875c44ed13756f4d960e4204733a17f4632246ce79ede3900bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_08d6174a8973f875c44ed13756f4d960e4204733a17f4632246ce79ede3900bb->leave($__internal_08d6174a8973f875c44ed13756f4d960e4204733a17f4632246ce79ede3900bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8f0326b0f5ba6aed2f0126d711dc889898099367352e06ba6cb9f09b5918e43 = $this->env->getExtension("native_profiler");
        $__internal_d8f0326b0f5ba6aed2f0126d711dc889898099367352e06ba6cb9f09b5918e43->enter($__internal_d8f0326b0f5ba6aed2f0126d711dc889898099367352e06ba6cb9f09b5918e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8f0326b0f5ba6aed2f0126d711dc889898099367352e06ba6cb9f09b5918e43->leave($__internal_d8f0326b0f5ba6aed2f0126d711dc889898099367352e06ba6cb9f09b5918e43_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87f1fecd317b62e316dc090a7a0e9f00d792cebc0cd4e8b1bcc145dc00c420f = $this->env->getExtension("native_profiler");
        $__internal_a87f1fecd317b62e316dc090a7a0e9f00d792cebc0cd4e8b1bcc145dc00c420f->enter($__internal_a87f1fecd317b62e316dc090a7a0e9f00d792cebc0cd4e8b1bcc145dc00c420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a87f1fecd317b62e316dc090a7a0e9f00d792cebc0cd4e8b1bcc145dc00c420f->leave($__internal_a87f1fecd317b62e316dc090a7a0e9f00d792cebc0cd4e8b1bcc145dc00c420f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eaccb25bb1c8b5f7f9ad187617dca8970bb5ff3bd2117cd7ad34dd1b507925a7 = $this->env->getExtension("native_profiler");
        $__internal_eaccb25bb1c8b5f7f9ad187617dca8970bb5ff3bd2117cd7ad34dd1b507925a7->enter($__internal_eaccb25bb1c8b5f7f9ad187617dca8970bb5ff3bd2117cd7ad34dd1b507925a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eaccb25bb1c8b5f7f9ad187617dca8970bb5ff3bd2117cd7ad34dd1b507925a7->leave($__internal_eaccb25bb1c8b5f7f9ad187617dca8970bb5ff3bd2117cd7ad34dd1b507925a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
