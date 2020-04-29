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

/* auth/login.twig */
class __TwigTemplate_a525395fd3e8ed4f1fd9b5a81ba13838a8f5b91b59796cd486c4c15086e7db82 extends Template
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
        echo "<html lang=\"en\"><head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Antina - Responsive Bootstrap Admin Template</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"/assets/img/core-img/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">

</head>

<body class=\"login-area\">

<!-- Preloader -->

<!-- Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class=\"main-content- h-100vh\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center justify-content-center\">
            <div class=\"col-md-8 col-lg-5\">
                <!-- Middle Box -->
                <div class=\"middle-box\">
                    <div class=\"card\">
                        <div class=\"card-body p-4\">

                            <!-- Logo -->
                            ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "get", [0 => "error"], "method", false, false, false, 39), "html", null, true);
        echo "
                            <ul>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 42
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["error"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 43
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            </ul>
                            <h4 class=\"font-24 mb-1\">Login.</h4>
                            <p class=\"mb-30\">Sign in to your account to continue.</p>

                            <form action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Views\Extensions\RouteExtension']->route("authenticate"), "html", null, true);
        echo "\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label class=\"float-left\" for=\"emailaddress\">Username</label>
                                    <input class=\"form-control\" type=\"text\" id=\"emailaddress\" name=\"login\" placeholder=\"Enter your email\">
                                </div>

                                <div class=\"form-group\">
                                    <a href=\"forget-password.html\" class=\"text-dark float-right\"></a>
                                    <label class=\"float-left\" for=\"password\">Password</label>
                                    <input class=\"form-control\" type=\"password\"  id=\"password\" name=\"password\" placeholder=\"Enter your password\">
                                </div>

";
        // line 69
        echo "                                <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "key", [], "any", false, false, false, 69), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "token", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
                                <div class=\"form-group mb-0\">
                                    <button class=\"btn btn-primary btn-block\" type=\"submit\"> Log In </button>
                                </div>

                                <div class=\"text-center mt-15\"><span class=\"mr-2 font-13 font-weight-bold\">Don't have an account?</span><a class=\"font-13 font-weight-bold\" href=\"register.html\">Sign up</a></div>

                            </form>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/bundle.js\"></script>

<!-- Active JS -->
<script src=\"/assets/js/default-assets/active.js\"></script>



</body></html>";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 69,  112 => 50,  106 => 46,  100 => 45,  91 => 43,  86 => 42,  82 => 41,  77 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"><head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Antina - Responsive Bootstrap Admin Template</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"/assets/img/core-img/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">

</head>

<body class=\"login-area\">

<!-- Preloader -->

<!-- Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class=\"main-content- h-100vh\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center justify-content-center\">
            <div class=\"col-md-8 col-lg-5\">
                <!-- Middle Box -->
                <div class=\"middle-box\">
                    <div class=\"card\">
                        <div class=\"card-body p-4\">

                            <!-- Logo -->
                            {{ flash.get('error') }}
                            <ul>
                                {% for error in errors %}
                                    {% for message in error %}
                                        <li>{{ message }}</li>
                                    {% endfor %}
                                {% endfor %}
                            </ul>
                            <h4 class=\"font-24 mb-1\">Login.</h4>
                            <p class=\"mb-30\">Sign in to your account to continue.</p>

                            <form action=\"{{ route('authenticate') }}\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label class=\"float-left\" for=\"emailaddress\">Username</label>
                                    <input class=\"form-control\" type=\"text\" id=\"emailaddress\" name=\"login\" placeholder=\"Enter your email\">
                                </div>

                                <div class=\"form-group\">
                                    <a href=\"forget-password.html\" class=\"text-dark float-right\"></a>
                                    <label class=\"float-left\" for=\"password\">Password</label>
                                    <input class=\"form-control\" type=\"password\"  id=\"password\" name=\"password\" placeholder=\"Enter your password\">
                                </div>

{#                                <div class=\"form-group d-flex justify-content-between align-items-center mb-3\">#}
{#                                    <div class=\"checkbox d-inline mb-0\">#}
{#                                        <input type=\"checkbox\" name=\"checkbox-1\" id=\"checkbox-8\">#}
{#                                        <label for=\"checkbox-8\" class=\"cr mb-0\">Remember me</label>#}
{#                                    </div>#}
{#                                    <span class=\"font-13 text-primary\"><a href=\"forget-password.html\">Forgot your password?</a></span>#}
{#                                </div>#}
                                <input type=\"hidden\" name=\"{{ csrf.key }}\" value=\"{{ csrf.token }}\">
                                <div class=\"form-group mb-0\">
                                    <button class=\"btn btn-primary btn-block\" type=\"submit\"> Log In </button>
                                </div>

                                <div class=\"text-center mt-15\"><span class=\"mr-2 font-13 font-weight-bold\">Don't have an account?</span><a class=\"font-13 font-weight-bold\" href=\"register.html\">Sign up</a></div>

                            </form>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/bundle.js\"></script>

<!-- Active JS -->
<script src=\"/assets/js/default-assets/active.js\"></script>



</body></html>", "auth/login.twig", "D:\\OSpanel\\OSPanel\\domains\\noframe\\views\\auth\\login.twig");
    }
}
