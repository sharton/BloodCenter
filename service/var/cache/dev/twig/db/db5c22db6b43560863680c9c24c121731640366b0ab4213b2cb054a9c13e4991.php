<?php

/* base.html.twig */
class __TwigTemplate_36b3ac6b118bd0761a431a8bffbb49d5089505bfe5d4fafd25179e46b9cd2941 extends Twig_Template
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
        $__internal_59c3a438c38b5ec61839026c4be681168783420fdb0d6461608b909df03b034d = $this->env->getExtension("native_profiler");
        $__internal_59c3a438c38b5ec61839026c4be681168783420fdb0d6461608b909df03b034d->enter($__internal_59c3a438c38b5ec61839026c4be681168783420fdb0d6461608b909df03b034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_59c3a438c38b5ec61839026c4be681168783420fdb0d6461608b909df03b034d->leave($__internal_59c3a438c38b5ec61839026c4be681168783420fdb0d6461608b909df03b034d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5b31ed38e856a00328b21bb35bf7a6c5fc998d377d8c556ce02c0c5fdd006b = $this->env->getExtension("native_profiler");
        $__internal_da5b31ed38e856a00328b21bb35bf7a6c5fc998d377d8c556ce02c0c5fdd006b->enter($__internal_da5b31ed38e856a00328b21bb35bf7a6c5fc998d377d8c556ce02c0c5fdd006b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da5b31ed38e856a00328b21bb35bf7a6c5fc998d377d8c556ce02c0c5fdd006b->leave($__internal_da5b31ed38e856a00328b21bb35bf7a6c5fc998d377d8c556ce02c0c5fdd006b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_badb2691fbc9e9773c5918f6adc9c201bad3aff0c7dfe1a819f86c4d943435ce = $this->env->getExtension("native_profiler");
        $__internal_badb2691fbc9e9773c5918f6adc9c201bad3aff0c7dfe1a819f86c4d943435ce->enter($__internal_badb2691fbc9e9773c5918f6adc9c201bad3aff0c7dfe1a819f86c4d943435ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_badb2691fbc9e9773c5918f6adc9c201bad3aff0c7dfe1a819f86c4d943435ce->leave($__internal_badb2691fbc9e9773c5918f6adc9c201bad3aff0c7dfe1a819f86c4d943435ce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6ade17cb112b354245ec1e8dc57e155597050256fc03cb04d463c192a0493ed = $this->env->getExtension("native_profiler");
        $__internal_d6ade17cb112b354245ec1e8dc57e155597050256fc03cb04d463c192a0493ed->enter($__internal_d6ade17cb112b354245ec1e8dc57e155597050256fc03cb04d463c192a0493ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6ade17cb112b354245ec1e8dc57e155597050256fc03cb04d463c192a0493ed->leave($__internal_d6ade17cb112b354245ec1e8dc57e155597050256fc03cb04d463c192a0493ed_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6115976aab297f5e33101e2d2760da55a8bd24d1089cdda3a775681899176cc9 = $this->env->getExtension("native_profiler");
        $__internal_6115976aab297f5e33101e2d2760da55a8bd24d1089cdda3a775681899176cc9->enter($__internal_6115976aab297f5e33101e2d2760da55a8bd24d1089cdda3a775681899176cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6115976aab297f5e33101e2d2760da55a8bd24d1089cdda3a775681899176cc9->leave($__internal_6115976aab297f5e33101e2d2760da55a8bd24d1089cdda3a775681899176cc9_prof);

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
