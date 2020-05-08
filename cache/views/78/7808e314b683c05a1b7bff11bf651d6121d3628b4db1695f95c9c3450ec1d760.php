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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>Login</title>
    <!-- Fevicon -->
    <link rel=\"shortcut icon\" href=\"/assets/images/favicon.ico\">
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
        <div class=\"auth-box login-box\">
            <!-- Start row -->
            <div class=\"row no-gutters align-items-center justify-content-center\">
                <!-- Start col -->
                <div class=\"col-md-6 col-lg-5\">
                    <!-- Start Auth Box -->
                    <div class=\"auth-box-right\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Views\Extensions\RouteExtension']->route("authenticate"), "html", null, true);
        echo "\" method=\"POST\">
                                    <h4 class=\"text-primary my-4\">Login</h4>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"login\" id=\"username\" placeholder=\"Username\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Password\" required>
                                    </div>
                                    <input type=\"hidden\" name=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "key", [], "any", false, false, false, 38), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "token", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                                    <div class=\"form-row mb-3\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"custom-control custom-checkbox text-left\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" name=\"remember\" id=\"rememberme\">
                                                <label class=\"custom-control-label font-14\" for=\"rememberme\">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"forgot-psw\">
                                                <a id=\"forgot-psw\" href=\"user-forgotpsw.html\" class=\"font-14\">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success btn-lg btn-block font-18\">Log in</button>
                                </form>
                                <p class=\"mb-0 mt-3\">Don't have a account? <a href=\"user-register.html\">Sign up</a></p>
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
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/modernizr.min.js\"></script>
<script src=\"/assets/js/detect.js\"></script>
<script src=\"/assets/js/jquery.slimscroll.js\"></script>
</body>
</html>";
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
        return array (  79 => 38,  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>Login</title>
    <!-- Fevicon -->
    <link rel=\"shortcut icon\" href=\"/assets/images/favicon.ico\">
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
        <div class=\"auth-box login-box\">
            <!-- Start row -->
            <div class=\"row no-gutters align-items-center justify-content-center\">
                <!-- Start col -->
                <div class=\"col-md-6 col-lg-5\">
                    <!-- Start Auth Box -->
                    <div class=\"auth-box-right\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <form action=\"{{ route('authenticate') }}\" method=\"POST\">
                                    <h4 class=\"text-primary my-4\">Login</h4>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"login\" id=\"username\" placeholder=\"Username\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Password\" required>
                                    </div>
                                    <input type=\"hidden\" name=\"{{ csrf.key }}\" value=\"{{ csrf.token }}\">
                                    <div class=\"form-row mb-3\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"custom-control custom-checkbox text-left\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" name=\"remember\" id=\"rememberme\">
                                                <label class=\"custom-control-label font-14\" for=\"rememberme\">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"forgot-psw\">
                                                <a id=\"forgot-psw\" href=\"user-forgotpsw.html\" class=\"font-14\">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success btn-lg btn-block font-18\">Log in</button>
                                </form>
                                <p class=\"mb-0 mt-3\">Don't have a account? <a href=\"user-register.html\">Sign up</a></p>
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
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/modernizr.min.js\"></script>
<script src=\"/assets/js/detect.js\"></script>
<script src=\"/assets/js/jquery.slimscroll.js\"></script>
</body>
</html>", "auth/login.twig", "D:\\OSpanel\\OSPanel\\domains\\noframe\\views\\auth\\login.twig");
    }
}
