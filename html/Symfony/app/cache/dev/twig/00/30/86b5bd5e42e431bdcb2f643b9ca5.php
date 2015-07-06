<?php

/* TestNewBundle:User:new.html.twig */
class __TwigTemplate_003086b5bd5e42e431bdcb2f643b9ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $_trait_0 = $this->env->loadTemplate("form_table_layout.html.twig");
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_table_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>User creation</h1>

\t<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("user_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <button type=\"submit\">Create</button>
\t
\t</form>
\t\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
\t\t<button type=\"submit\">Back</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "TestNewBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  56 => 8,  49 => 7,  45 => 5,  42 => 4,  37 => 3,  14 => 2,);
    }
}
