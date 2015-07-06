<?php

/* TestNewBundle:User:show.html.twig */
class __TwigTemplate_d9cf5f5069133d5b41534eba7c580eac extends Twig_Template
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
        echo "<h1>User</h1>

<table class=\"record_properties\">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname"), "html", null, true);
        echo "</td>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname"), "html", null, true);
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age"), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
\t
<td>
\t<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t<button type=\"submit\">Edit</button>
\t</form>
</td>
<td>
\t<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
\t\t<button type=\"submit\">Delete</button>\t
\t</form>
</td>
  </tbody>
    </table>
<form action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
\t\t<button type=\"submit\">Back</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "TestNewBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  77 => 30,  72 => 28,  64 => 23,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
