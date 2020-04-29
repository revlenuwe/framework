<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.twig */
class __TwigTemplate_575c8f9770de7f395d776e87a7a194447769780b1f21aaf7b5b7d7dd30833765 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "dfds
";
        // line 2
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "check", [], "any", false, false, false, 2)]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("dfds
{{ dump(auth.check) }}", "index.twig", "D:\\OSpanel\\OSPanel\\domains\\noframe\\views\\index.twig");
    }
}
