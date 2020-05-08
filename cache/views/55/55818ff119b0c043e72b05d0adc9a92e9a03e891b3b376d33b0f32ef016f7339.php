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

/* auth/register.twig */
class __TwigTemplate_2159ad4c960e158184b979910de004a27b53b975fd0e2e19629bbdf4ed799afb extends Template
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
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>Register</title>
    <!-- Fevicon -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">
    <!-- Start css -->
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- End css -->
</head>
<body class=\"horizontal-layout\">
<!-- Start Containerbar -->
<div id=\"containerbar\" class=\"containerbar authenticate-bg\">
    <!-- Start Container -->
    <div class=\"container\">
        <div class=\"auth-box register-box\">
            <!-- Start row -->
            <div class=\"row no-gutters align-items-center justify-content-center\">
                <!-- Start col -->
                <div class=\"col-md-6 col-lg-5\">
                    <!-- Start Auth Box -->
                    <div class=\"auth-box-right\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['App\Views\Extensions\RouteExtension']->route("register"), "html", null, true);
        echo "\" method=\"POST\">
                                    <h4 class=\"text-primary my-4\">Register</h4>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"login\" id=\"username\" placeholder=\"Username\" required=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\" required=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\" required=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control\" id=\"password-confirm\" name=\"password_confirmation\" placeholder=\"Password Confirmation\" required=\"\">
                                    </div>
                                    <input type=\"hidden\" name=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "key", [], "any", false, false, false, 42), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "token", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg btn-block font-18\">Register</button>
                                </form>
                                <p class=\"mb-0 mt-3\">Already have an account? <a href=\"user-login.html\">Login</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/modernizr.min.js\"></script>
<script src=\"/assets/js/detect.js\"></script>
<script src=\"/assets/js/jquery.slimscroll.js\"></script>
<!-- End js -->

</body></html>";
    }

    public function getTemplateName()
    {
        return "auth/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>Register</title>
    <!-- Fevicon -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">
    <!-- Start css -->
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- End css -->
</head>
<body class=\"horizontal-layout\">
<!-- Start Containerbar -->
<div id=\"containerbar\" class=\"containerbar authenticate-bg\">
    <!-- Start Container -->
    <div class=\"container\">
        <div class=\"auth-box register-box\">
            <!-- Start row -->
            <div class=\"row no-gutters align-items-center justify-content-center\">
                <!-- Start col -->
                <div class=\"col-md-6 col-lg-5\">
                    <!-- Start Auth Box -->
                    <div class=\"auth-box-right\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <form action=\"{{ route('register') }}\" method=\"POST\">
                                    <h4 class=\"text-primary my-4\">Register</h4>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"login\" id=\"username\" placeholder=\"Username\" required=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\" required=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\" required=\"\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control\" id=\"password-confirm\" name=\"password_confirmation\" placeholder=\"Password Confirmation\" required=\"\">
                                    </div>
                                    <input type=\"hidden\" name=\"{{ csrf.key }}\" value=\"{{ csrf.token }}\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg btn-block font-18\">Register</button>
                                </form>
                                <p class=\"mb-0 mt-3\">Already have an account? <a href=\"user-login.html\">Login</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/modernizr.min.js\"></script>
<script src=\"/assets/js/detect.js\"></script>
<script src=\"/assets/js/jquery.slimscroll.js\"></script>
<!-- End js -->

</body></html>", "auth/register.twig", "D:\\OSpanel\\OSPanel\\domains\\noframe\\views\\auth\\register.twig");
    }
}
