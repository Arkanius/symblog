<?php

/* base.html.twig */
class __TwigTemplate_a75f9cc6f5c12cd677958211b98d9e4b5fee59949029707c201c5ba1ca74c290 extends Twig_Template
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
        $__internal_4e969a8e459e8e89a16d30c29c3ccac91e2ccd490a738b53bef4a11b29e6b007 = $this->env->getExtension("native_profiler");
        $__internal_4e969a8e459e8e89a16d30c29c3ccac91e2ccd490a738b53bef4a11b29e6b007->enter($__internal_4e969a8e459e8e89a16d30c29c3ccac91e2ccd490a738b53bef4a11b29e6b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4e969a8e459e8e89a16d30c29c3ccac91e2ccd490a738b53bef4a11b29e6b007->leave($__internal_4e969a8e459e8e89a16d30c29c3ccac91e2ccd490a738b53bef4a11b29e6b007_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_717962b5a70403f200a035dee0a326c140f9ef02999f0cafc2d050326cfe6e50 = $this->env->getExtension("native_profiler");
        $__internal_717962b5a70403f200a035dee0a326c140f9ef02999f0cafc2d050326cfe6e50->enter($__internal_717962b5a70403f200a035dee0a326c140f9ef02999f0cafc2d050326cfe6e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_717962b5a70403f200a035dee0a326c140f9ef02999f0cafc2d050326cfe6e50->leave($__internal_717962b5a70403f200a035dee0a326c140f9ef02999f0cafc2d050326cfe6e50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_162b590c07f8c3d12e8197f28fded4cc6212f1acf5d3a9d5bb579f8d01480008 = $this->env->getExtension("native_profiler");
        $__internal_162b590c07f8c3d12e8197f28fded4cc6212f1acf5d3a9d5bb579f8d01480008->enter($__internal_162b590c07f8c3d12e8197f28fded4cc6212f1acf5d3a9d5bb579f8d01480008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_162b590c07f8c3d12e8197f28fded4cc6212f1acf5d3a9d5bb579f8d01480008->leave($__internal_162b590c07f8c3d12e8197f28fded4cc6212f1acf5d3a9d5bb579f8d01480008_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e93494b105e1107fd8f7348232df656aba838915016810908be44166970e82 = $this->env->getExtension("native_profiler");
        $__internal_42e93494b105e1107fd8f7348232df656aba838915016810908be44166970e82->enter($__internal_42e93494b105e1107fd8f7348232df656aba838915016810908be44166970e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42e93494b105e1107fd8f7348232df656aba838915016810908be44166970e82->leave($__internal_42e93494b105e1107fd8f7348232df656aba838915016810908be44166970e82_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_692af805056059edc4b30ae3fca1feaea45c7e298f50549d9855a1d0bf4874c1 = $this->env->getExtension("native_profiler");
        $__internal_692af805056059edc4b30ae3fca1feaea45c7e298f50549d9855a1d0bf4874c1->enter($__internal_692af805056059edc4b30ae3fca1feaea45c7e298f50549d9855a1d0bf4874c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_692af805056059edc4b30ae3fca1feaea45c7e298f50549d9855a1d0bf4874c1->leave($__internal_692af805056059edc4b30ae3fca1feaea45c7e298f50549d9855a1d0bf4874c1_prof);

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
