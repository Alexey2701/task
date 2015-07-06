<?php

/* TestNewBundle:User:edit.html.twig */
class __TwigTemplate_75daa7af304629bc5bdde54b562c6dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>User edit</h1>

\t<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
        \t<input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        \t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        \t<button type=\"submit\">Edit</button>
    \t</form>

\t<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
\t\t<button type=\"submit\">Back</button>
\t</form>

        <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
           \t<input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
           \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
\t\t<button type=\"submit\">Delete</button>
        </form>
";
    }

    public function getTemplateName()
    {
        return "TestNewBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  57 => 15,  50 => 11,  43 => 7,  35 => 5,  31 => 3,  28 => 2,);
    }
}
