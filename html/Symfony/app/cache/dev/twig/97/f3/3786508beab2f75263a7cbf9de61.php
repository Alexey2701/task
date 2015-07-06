<?php

/* TestNewBundle:Useraddress:show.html.twig */
class __TwigTemplate_97f33786508beab2f75263a7cbf9de61 extends Twig_Template
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
        echo "<h1>Useraddress</h1>

    <table class=\"record_properties\">
\t<thead>
            <tr>
                <th>Zip</th>
                <th>City</th>
                <th>Street</th>
                <th>House</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zip"), "html", null, true);
        echo "</td>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "street"), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "house"), "html", null, true);
        echo "</td>
    <td>
\t<form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraddress_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t<button type=\"submit\">Edit</button>
\t</form>
   </td>
  <td>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraddress_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
   </td>
 </tbody>
    </table>
<form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("useraddress");
        echo "\">
\t\t<button type=\"submit\">Back</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "TestNewBundle:Useraddress:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  76 => 29,  71 => 27,  63 => 22,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
