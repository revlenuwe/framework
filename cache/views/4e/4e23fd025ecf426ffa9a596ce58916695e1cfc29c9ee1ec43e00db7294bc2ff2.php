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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/app.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
        <!-- Start col -->
        <div class=\"col-lg-12\">
            <div class=\"card m-b-30\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Order Confirmed</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4\">
                            <div class=\"pt-5 text-center my-5\">
                                <h2 class=\"text-success\">Welcome</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
";
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
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/app.twig\" %}

{% block content %}
    <div class=\"row\">
        <!-- Start col -->
        <div class=\"col-lg-12\">
            <div class=\"card m-b-30\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Order Confirmed</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4\">
                            <div class=\"pt-5 text-center my-5\">
                                <h2 class=\"text-success\">Welcome</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
{% endblock %}", "index.twig", "D:\\OSpanel\\OSPanel\\domains\\noframe\\views\\index.twig");
    }
}
