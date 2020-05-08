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

/* layouts/app.twig */
class __TwigTemplate_5047c16bca99cfbf1233bffcb875c13660ccfc9ce6943e010c776de0c3b78ca8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"en\" class=\"\"><script type=\"text/javascript\" charset=\"utf-8\" id=\"zm-extension\" src=\"chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js\" async=\"\"></script><head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Soyuz is a bootstrap 4x + laravel admin dashboard template\">
    <meta name=\"keywords\" content=\"admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, laravel, clean, crm, ecommerce, hospital, responsive, rtl, sass support, ui kits\">
    <meta name=\"author\" content=\"Themesbox17\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>Soyuz - Bootstrap 4x + Laravel Admin Dashboard Template</title>
    <!-- Fevicon -->
    <link rel=\"shortcut icon\" href=\"/assets/images/favicon.ico\">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href=\"/assets/plugins/switchery/switchery.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/flag-icon.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- End css -->
</head>
<body class=\"horizontal-layout\" cz-shortcut-listen=\"true\">
<div id=\"containerbar\" class=\"container-fluid\">
    <div class=\"rightbar\">
        <!-- Start Topbar Mobile -->
        <div class=\"topbar-mobile\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12\">
                    <div class=\"mobile-logobar\">
                        <a href=\"index.html\" class=\"mobile-logo\"><img src=\"/assets/images/logo.svg\" class=\"img-fluid\" alt=\"logo\"></a>
                    </div>
                    <div class=\"mobile-togglebar\">
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <div class=\"topbar-toggle-icon\">
                                    <a class=\"topbar-toggle-hamburger\" href=\"javascript:void();\">
                                        <img src=\"/assets/images/svg-icon/horizontal.svg\" class=\"img-fluid menu-hamburger-horizontal\" alt=\"horizontal\">
                                        <img src=\"/assets/images/svg-icon/verticle.svg\" class=\"img-fluid menu-hamburger-vertical\" alt=\"verticle\">
                                    </a>
                                </div>
                            </li>
                            <li class=\"list-inline-item\">
                                <div class=\"menubar\">
                                    <a class=\"menu-hamburger navbar-toggle bg-transparent\" href=\"javascript:void();\" data-toggle=\"collapse\" data-target=\"#navbar-menu\" aria-expanded=\"true\">
                                        <img src=\"/assets/images/svg-icon/menu.svg\" class=\"img-fluid menu-hamburger-collapse\" alt=\"menu\">
                                        <img src=\"/assets/images/svg-icon/close.svg\" class=\"img-fluid menu-hamburger-close\" alt=\"close\">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class=\"topbar\">
            <!-- Start container-fluid -->
            <div class=\"container-fluid\">
                <!-- Start row -->
                <div class=\"row align-items-center\">
                    <!-- Start col -->
                    <div class=\"col-md-12 align-self-center\">
                        <div class=\"togglebar\">
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <div class=\"logobar\">
                                        <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Views\Extensions\RouteExtension']->route("index"), "html", null, true);
        echo "\" class=\"logo logo-large\">
                                            <img src=\"/assets/images/logo.png\" class=\"img-fluid\" alt=\"logo\">
                                        </a>
                                    </div>
                                </li>
                                <li class=\"list-inline-item\">
                                    <div class=\"searchbar\">
                                        <form>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-append\">
                                                    <button class=\"btn\" type=\"submit\" id=\"button-addonSearch\"><img src=\"/assets/images/svg-icon/search.svg\" class=\"img-fluid\" alt=\"search\"></button>
                                                </div>
                                                <input type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"button-addonSearch\">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"infobar\">
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "check", [], "any", false, false, false, 87)) {
            // line 88
            echo "                                    <div class=\"profilebar\">
                                        <div class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"profilelink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <img src=\"/assets/images/users/profile.svg\" class=\"img-fluid\" alt=\"profile\">
                                                <span class=\"live-icon\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "user", [], "any", false, false, false, 92), "login", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                                                <span class=\"feather icon-chevron-down live-icon\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"profilelink\">
                                                <div class=\"dropdown-item\">
                                                    <div class=\"profilename\">
                                                        <h5>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "user", [], "any", false, false, false, 98), "login", [], "any", false, false, false, 98), "html", null, true);
            echo "</h5>
                                                    </div>
                                                </div>
                                                <div class=\"userbox\">
                                                    <ul class=\"list-unstyled mb-0\">
                                                        <li class=\"media dropdown-item\">
                                                            <a href=\"#\" class=\"profile-icon\"><img src=\"/assets/images/svg-icon/logout.svg\" class=\"img-fluid\" alt=\"logout\">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        } else {
            // line 112
            echo "                                    <div class=\"profilebar\">
                                        <a class=\"btn btn-primary mt-1\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['App\Views\Extensions\RouteExtension']->route("auth-login"), "html", null, true);
            echo "\" >
                                           Login
                                        </a>
                                        <a class=\"btn btn-primary mt-1\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['App\Views\Extensions\RouteExtension']->route("auth-login"), "html", null, true);
            echo "\">
                                            Register
                                        </a>
                                    </div>
                                    ";
        }
        // line 121
        echo "                                </li>
                                <li class=\"list-inline-item menubar-toggle\">
                                    <div class=\"menubar\">
                                        <a class=\"menu-hamburger navbar-toggle bg-transparent\" href=\"javascript:void();\" data-toggle=\"collapse\" data-target=\"#navbar-menu\" aria-expanded=\"true\">
                                            <img src=\"/assets/images/svg-icon/menu.svg\" class=\"img-fluid menu-hamburger-collapse\" alt=\"menu\">
                                            <img src=\"/assets/images/svg-icon/close.svg\" class=\"img-fluid menu-hamburger-close\" alt=\"close\">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Topbar -->
        <!-- Start Navigationbar -->
        <div class=\"navigationbar\">
            <!-- Start container-fluid -->
            <div class=\"container-fluid\">
                <!-- Start Horizontal Nav -->
                <nav class=\"horizontal-nav mobile-navbar fixed-navbar\">
                    <div class=\"collapse navbar-collapse active\" id=\"navbar-menu\">
                        <ul class=\"horizontal-menu pt-2 in\">
                            <li class=\"scroll dropdown\">
                                <a href=\"javaScript:void();\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"/assets/images/svg-icon/crm.svg\" class=\"img-fluid\" alt=\"CRM\"><span>CRM</span></a>
                                <ul class=\"dropdown-menu animated\">
                                    <li><a href=\"index.html\"><img src=\"/assets/images/svg-icon/dashboard.svg\" class=\"img-fluid\" alt=\"dashboard\">Dashboard</a></li>
                                    <li><a href=\"crm-projects.html\"><img src=\"/assets/images/svg-icon/reports.svg\" class=\"img-fluid\" alt=\"projects\">Projects</a></li>
                                    <li><a href=\"crm-lead-status.html\"><img src=\"/assets/images/svg-icon/charts.svg\" class=\"img-fluid\" alt=\"leads\">Lead Status</a></li>
                                    <li><a href=\"crm-clients.html\"><img src=\"/assets/images/svg-icon/customers.svg\" class=\"img-fluid\" alt=\"clients\">Clients</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Horizontal Nav -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Navigationbar -->
        <!-- Start Breadcrumbbar -->
";
        // line 186
        echo "        <div class=\"contentbar\">
            ";
        // line 187
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "        </div>
    </div>
    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/modernizr.min.js\"></script>
<script src=\"/assets/js/detect.js\"></script>
<script src=\"/assets/js/jquery.slimscroll.js\"></script>
<script src=\"/assets/js/horizontal-menu.js\"></script>
<!-- Switchery js -->
<script src=\"/assets/plugins/switchery/switchery.min.js\"></script>
<!-- Core js -->
<script src=\"/assets/js/core.js\"></script>
<!-- End js -->

</body></html>";
    }

    // line 187
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 187,  232 => 188,  230 => 187,  227 => 186,  180 => 121,  172 => 116,  166 => 113,  163 => 112,  146 => 98,  137 => 92,  131 => 88,  129 => 87,  104 => 65,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\" class=\"\"><script type=\"text/javascript\" charset=\"utf-8\" id=\"zm-extension\" src=\"chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js\" async=\"\"></script><head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Soyuz is a bootstrap 4x + laravel admin dashboard template\">
    <meta name=\"keywords\" content=\"admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, laravel, clean, crm, ecommerce, hospital, responsive, rtl, sass support, ui kits\">
    <meta name=\"author\" content=\"Themesbox17\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>Soyuz - Bootstrap 4x + Laravel Admin Dashboard Template</title>
    <!-- Fevicon -->
    <link rel=\"shortcut icon\" href=\"/assets/images/favicon.ico\">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href=\"/assets/plugins/switchery/switchery.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/flag-icon.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- End css -->
</head>
<body class=\"horizontal-layout\" cz-shortcut-listen=\"true\">
<div id=\"containerbar\" class=\"container-fluid\">
    <div class=\"rightbar\">
        <!-- Start Topbar Mobile -->
        <div class=\"topbar-mobile\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12\">
                    <div class=\"mobile-logobar\">
                        <a href=\"index.html\" class=\"mobile-logo\"><img src=\"/assets/images/logo.svg\" class=\"img-fluid\" alt=\"logo\"></a>
                    </div>
                    <div class=\"mobile-togglebar\">
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <div class=\"topbar-toggle-icon\">
                                    <a class=\"topbar-toggle-hamburger\" href=\"javascript:void();\">
                                        <img src=\"/assets/images/svg-icon/horizontal.svg\" class=\"img-fluid menu-hamburger-horizontal\" alt=\"horizontal\">
                                        <img src=\"/assets/images/svg-icon/verticle.svg\" class=\"img-fluid menu-hamburger-vertical\" alt=\"verticle\">
                                    </a>
                                </div>
                            </li>
                            <li class=\"list-inline-item\">
                                <div class=\"menubar\">
                                    <a class=\"menu-hamburger navbar-toggle bg-transparent\" href=\"javascript:void();\" data-toggle=\"collapse\" data-target=\"#navbar-menu\" aria-expanded=\"true\">
                                        <img src=\"/assets/images/svg-icon/menu.svg\" class=\"img-fluid menu-hamburger-collapse\" alt=\"menu\">
                                        <img src=\"/assets/images/svg-icon/close.svg\" class=\"img-fluid menu-hamburger-close\" alt=\"close\">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class=\"topbar\">
            <!-- Start container-fluid -->
            <div class=\"container-fluid\">
                <!-- Start row -->
                <div class=\"row align-items-center\">
                    <!-- Start col -->
                    <div class=\"col-md-12 align-self-center\">
                        <div class=\"togglebar\">
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <div class=\"logobar\">
                                        <a href=\"{{ route('index') }}\" class=\"logo logo-large\">
                                            <img src=\"/assets/images/logo.png\" class=\"img-fluid\" alt=\"logo\">
                                        </a>
                                    </div>
                                </li>
                                <li class=\"list-inline-item\">
                                    <div class=\"searchbar\">
                                        <form>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-append\">
                                                    <button class=\"btn\" type=\"submit\" id=\"button-addonSearch\"><img src=\"/assets/images/svg-icon/search.svg\" class=\"img-fluid\" alt=\"search\"></button>
                                                </div>
                                                <input type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"button-addonSearch\">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"infobar\">
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    {% if(auth.check) %}
                                    <div class=\"profilebar\">
                                        <div class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"profilelink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <img src=\"/assets/images/users/profile.svg\" class=\"img-fluid\" alt=\"profile\">
                                                <span class=\"live-icon\">{{ auth.user.login }}</span>
                                                <span class=\"feather icon-chevron-down live-icon\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"profilelink\">
                                                <div class=\"dropdown-item\">
                                                    <div class=\"profilename\">
                                                        <h5>{{ auth.user.login }}</h5>
                                                    </div>
                                                </div>
                                                <div class=\"userbox\">
                                                    <ul class=\"list-unstyled mb-0\">
                                                        <li class=\"media dropdown-item\">
                                                            <a href=\"#\" class=\"profile-icon\"><img src=\"/assets/images/svg-icon/logout.svg\" class=\"img-fluid\" alt=\"logout\">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% else %}
                                    <div class=\"profilebar\">
                                        <a class=\"btn btn-primary mt-1\" href=\"{{ route('auth-login') }}\" >
                                           Login
                                        </a>
                                        <a class=\"btn btn-primary mt-1\" href=\"{{ route('auth-login') }}\">
                                            Register
                                        </a>
                                    </div>
                                    {% endif %}
                                </li>
                                <li class=\"list-inline-item menubar-toggle\">
                                    <div class=\"menubar\">
                                        <a class=\"menu-hamburger navbar-toggle bg-transparent\" href=\"javascript:void();\" data-toggle=\"collapse\" data-target=\"#navbar-menu\" aria-expanded=\"true\">
                                            <img src=\"/assets/images/svg-icon/menu.svg\" class=\"img-fluid menu-hamburger-collapse\" alt=\"menu\">
                                            <img src=\"/assets/images/svg-icon/close.svg\" class=\"img-fluid menu-hamburger-close\" alt=\"close\">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Topbar -->
        <!-- Start Navigationbar -->
        <div class=\"navigationbar\">
            <!-- Start container-fluid -->
            <div class=\"container-fluid\">
                <!-- Start Horizontal Nav -->
                <nav class=\"horizontal-nav mobile-navbar fixed-navbar\">
                    <div class=\"collapse navbar-collapse active\" id=\"navbar-menu\">
                        <ul class=\"horizontal-menu pt-2 in\">
                            <li class=\"scroll dropdown\">
                                <a href=\"javaScript:void();\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"/assets/images/svg-icon/crm.svg\" class=\"img-fluid\" alt=\"CRM\"><span>CRM</span></a>
                                <ul class=\"dropdown-menu animated\">
                                    <li><a href=\"index.html\"><img src=\"/assets/images/svg-icon/dashboard.svg\" class=\"img-fluid\" alt=\"dashboard\">Dashboard</a></li>
                                    <li><a href=\"crm-projects.html\"><img src=\"/assets/images/svg-icon/reports.svg\" class=\"img-fluid\" alt=\"projects\">Projects</a></li>
                                    <li><a href=\"crm-lead-status.html\"><img src=\"/assets/images/svg-icon/charts.svg\" class=\"img-fluid\" alt=\"leads\">Lead Status</a></li>
                                    <li><a href=\"crm-clients.html\"><img src=\"/assets/images/svg-icon/customers.svg\" class=\"img-fluid\" alt=\"clients\">Clients</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Horizontal Nav -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Navigationbar -->
        <!-- Start Breadcrumbbar -->
{#        <div class=\"breadcrumbbar\">#}
{#            <div class=\"row align-items-center\">#}
{#                <div class=\"col-md-8 col-lg-8\">#}
{#                    <h4 class=\"page-title\">Thank You</h4>#}
{#                    <div class=\"breadcrumb-list\">#}
{#                        <ol class=\"breadcrumb\">#}
{#                            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>#}
{#                            <li class=\"breadcrumb-item\"><a href=\"#\">eCommerce</a></li>#}
{#                            <li class=\"breadcrumb-item\"><a href=\"#\">Front End</a></li>#}
{#                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Thank You</li>#}
{#                        </ol>#}
{#                    </div>#}
{#                </div>#}
{#                <div class=\"col-md-4 col-lg-4\">#}
{#                    <div class=\"widgetbar\">#}
{#                        <button class=\"btn btn-primary-rgba\"><i class=\"feather icon-plus mr-2\"></i>Actions</button>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
        <div class=\"contentbar\">
            {% block content %}{% endblock %}
        </div>
    </div>
    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/js/popper.min.js\"></script>
<script src=\"/assets/js/bootstrap.min.js\"></script>
<script src=\"/assets/js/modernizr.min.js\"></script>
<script src=\"/assets/js/detect.js\"></script>
<script src=\"/assets/js/jquery.slimscroll.js\"></script>
<script src=\"/assets/js/horizontal-menu.js\"></script>
<!-- Switchery js -->
<script src=\"/assets/plugins/switchery/switchery.min.js\"></script>
<!-- Core js -->
<script src=\"/assets/js/core.js\"></script>
<!-- End js -->

</body></html>", "layouts/app.twig", "D:\\OSpanel\\OSPanel\\domains\\noframe\\views\\layouts\\app.twig");
    }
}
