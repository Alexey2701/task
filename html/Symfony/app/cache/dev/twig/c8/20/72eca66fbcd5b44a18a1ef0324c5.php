<?php

/* TestNewBundle:Useraddress:new.html.twig */
class __TwigTemplate_c82072eca66fbcd5b44a18a1ef0324c5 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Useraddress creation</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("useraddress_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <button type=\"submit\">Create</button>
    </form>
\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("useraddress");
        echo "\">
\t\t<button type=\"submit\">Back</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "TestNewBundle:Useraddress:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  42 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
