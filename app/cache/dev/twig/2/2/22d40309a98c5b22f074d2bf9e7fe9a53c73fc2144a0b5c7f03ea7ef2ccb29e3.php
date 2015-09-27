<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cc6c8436214583317d6c37fc8b56aa6477bea0ea3cfbe2290fa68bf3f1f264ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4448f3c5960a413413cdced1eec3775ed3423f7b4647be4f94cb8cdd9ca7c2ed = $this->env->getExtension("native_profiler");
        $__internal_4448f3c5960a413413cdced1eec3775ed3423f7b4647be4f94cb8cdd9ca7c2ed->enter($__internal_4448f3c5960a413413cdced1eec3775ed3423f7b4647be4f94cb8cdd9ca7c2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4448f3c5960a413413cdced1eec3775ed3423f7b4647be4f94cb8cdd9ca7c2ed->leave($__internal_4448f3c5960a413413cdced1eec3775ed3423f7b4647be4f94cb8cdd9ca7c2ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e0a3ffc7cd8a3db720c4243826df90e61ecb0d0602a306de8b99feb22c225bb = $this->env->getExtension("native_profiler");
        $__internal_4e0a3ffc7cd8a3db720c4243826df90e61ecb0d0602a306de8b99feb22c225bb->enter($__internal_4e0a3ffc7cd8a3db720c4243826df90e61ecb0d0602a306de8b99feb22c225bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e0a3ffc7cd8a3db720c4243826df90e61ecb0d0602a306de8b99feb22c225bb->leave($__internal_4e0a3ffc7cd8a3db720c4243826df90e61ecb0d0602a306de8b99feb22c225bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d0448ac3df3dee66a1647120635c1e769f8d6d3ac31e7851ad4f284a977afa9 = $this->env->getExtension("native_profiler");
        $__internal_0d0448ac3df3dee66a1647120635c1e769f8d6d3ac31e7851ad4f284a977afa9->enter($__internal_0d0448ac3df3dee66a1647120635c1e769f8d6d3ac31e7851ad4f284a977afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d0448ac3df3dee66a1647120635c1e769f8d6d3ac31e7851ad4f284a977afa9->leave($__internal_0d0448ac3df3dee66a1647120635c1e769f8d6d3ac31e7851ad4f284a977afa9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3579ce573fa4cc2ebdd16131223ac7a5dbf33462896bb039986e201ad3ad455 = $this->env->getExtension("native_profiler");
        $__internal_a3579ce573fa4cc2ebdd16131223ac7a5dbf33462896bb039986e201ad3ad455->enter($__internal_a3579ce573fa4cc2ebdd16131223ac7a5dbf33462896bb039986e201ad3ad455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a3579ce573fa4cc2ebdd16131223ac7a5dbf33462896bb039986e201ad3ad455->leave($__internal_a3579ce573fa4cc2ebdd16131223ac7a5dbf33462896bb039986e201ad3ad455_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
