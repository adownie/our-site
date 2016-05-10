<?php

/* themes/basic/templates/page.html.twig */
class __TwigTemplate_8805cd9fb0bd5b4b1523433a9524299dc3f265caee0117b677aa5851b586e6a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 1, "if" => 13);
        $filters = array("render" => 1, "t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('render', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["main_menu"] = $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()));
        // line 2
        $context["secondary_menu"] = $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()));
        // line 3
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "layout-container", 1 => (((        // line 5
(isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) ? ("with-navigation") : ("")), 2 => ((        // line 6
(isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) ? ("with-subnav") : (""))), "method"), "html", null, true));
        // line 7
        echo ">

  <!-- ______________________ HEADER _______________________ -->

  <header id=\"header\">
    <div class=\"container\">
      ";
        // line 13
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 14
            echo "        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
          <img src=\"";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
        </a>
      ";
        }
        // line 18
        echo "
      ";
        // line 19
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 20
            echo "        ";
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 21
                echo "          ";
                if ((isset($context["title"]) ? $context["title"] : null)) {
                    // line 22
                    echo "            <div id=\"site-name\">
              <a href=\"";
                    // line 23
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" rel=\"home\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</a>
            </div>
          ";
                } else {
                    // line 26
                    echo "            <h1 id=\"site-name\">
              <a href=\"";
                    // line 27
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" rel=\"home\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</a>
            </h1>
          ";
                }
                // line 30
                echo "        ";
            }
            // line 31
            echo "
        ";
            // line 32
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 33
                echo "          <div id=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
        ";
            }
            // line 35
            echo "      ";
        }
        // line 36
        echo "
      ";
        // line 37
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 38
            echo "        <div id=\"header-region\">
          ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 42
        echo "    </div>
  </header><!-- /#header -->

  ";
        // line 45
        if (((isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) {
            // line 46
            echo "    <nav id=\"navigation\" class=\"menu";
            if ((isset($context["main_menu"]) ? $context["main_menu"] : null)) {
                echo " with-primary";
            }
            if ((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) {
                echo " with-secondary";
            }
            echo "\">
      <div class=\"container\">
        ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true));
            echo "
        ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
      </div>
    </nav><!-- /#navigation -->
  ";
        }
        // line 53
        echo "
  <!-- ______________________ MAIN _______________________ -->

  <div id=\"main\">
    <div class=\"container\">
      <section id=\"content\">

        <div id=\"content-header\">

          ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

          ";
        // line 64
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()))) {
            // line 65
            echo "            <div id=\"highlighted\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "</div>
          ";
        }
        // line 67
        echo "
          ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "

          ";
        // line 70
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 71
            echo "            <h1 class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 73
        echo "
          ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
          ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

          ";
        // line 77
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 78
            echo "            <div class=\"tabs\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "</div>
          ";
        }
        // line 80
        echo "
          ";
        // line 81
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 82
            echo "            <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
          ";
        }
        // line 84
        echo "
        </div><!-- /#content-header -->

        <div id=\"content-area\">
          ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>

      </section><!-- /#content -->

      ";
        // line 93
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) {
            // line 94
            echo "        <aside id=\"sidebar-first\" class=\"column sidebar first\">
          ";
            // line 95
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside><!-- /#sidebar-first -->
      ";
        }
        // line 98
        echo "
      ";
        // line 99
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 100
            echo "        <aside id=\"sidebar-second\" class=\"column sidebar second\">
          ";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside><!-- /#sidebar-second -->
      ";
        }
        // line 104
        echo "    </div><!-- /.container -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

  ";
        // line 109
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 110
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer><!-- /#footer -->
  ";
        }
        // line 116
        echo "
</div><!-- /.layout-container -->
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 116,  297 => 112,  293 => 110,  291 => 109,  284 => 104,  278 => 101,  275 => 100,  273 => 99,  270 => 98,  264 => 95,  261 => 94,  259 => 93,  251 => 88,  245 => 84,  239 => 82,  237 => 81,  234 => 80,  228 => 78,  226 => 77,  221 => 75,  217 => 74,  214 => 73,  208 => 71,  206 => 70,  201 => 68,  198 => 67,  192 => 65,  190 => 64,  185 => 62,  174 => 53,  167 => 49,  163 => 48,  152 => 46,  150 => 45,  145 => 42,  139 => 39,  136 => 38,  134 => 37,  131 => 36,  128 => 35,  122 => 33,  120 => 32,  117 => 31,  114 => 30,  104 => 27,  101 => 26,  91 => 23,  88 => 22,  85 => 21,  82 => 20,  80 => 19,  77 => 18,  69 => 15,  62 => 14,  60 => 13,  52 => 7,  50 => 6,  49 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set main_menu = page.primary_menu|render %}*/
/* {% set secondary_menu = page.secondary_menu|render %}*/
/* <div{{ attributes.addClass(*/
/*   'layout-container',*/
/*   main_menu or secondary_menu ? 'with-navigation',*/
/*   secondary_menu ? 'with-subnav'*/
/* ) }}>*/
/* */
/*   <!-- ______________________ HEADER _______________________ -->*/
/* */
/*   <header id="header">*/
/*     <div class="container">*/
/*       {% if logo %}*/
/*         <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*           <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*         </a>*/
/*       {% endif %}*/
/* */
/*       {% if site_name or site_slogan %}*/
/*         {% if site_name %}*/
/*           {% if title %}*/
/*             <div id="site-name">*/
/*               <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{  site_name }}</a>*/
/*             </div>*/
/*           {% else %}{# Use h1 when the content title is empty #}*/
/*             <h1 id="site-name">*/
/*               <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{  site_name }}</a>*/
/*             </h1>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if site_slogan %}*/
/*           <div id="site-slogan">{{ site_slogan }}</div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/*       {% if page.header %}*/
/*         <div id="header-region">*/
/*           {{ page.header }}*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </header><!-- /#header -->*/
/* */
/*   {% if main_menu or secondary_menu %}*/
/*     <nav id="navigation" class="menu{% if main_menu %} with-primary{% endif %}{% if secondary_menu %} with-secondary{% endif %}">*/
/*       <div class="container">*/
/*         {{ main_menu }}*/
/*         {{ secondary_menu }}*/
/*       </div>*/
/*     </nav><!-- /#navigation -->*/
/*   {% endif %}*/
/* */
/*   <!-- ______________________ MAIN _______________________ -->*/
/* */
/*   <div id="main">*/
/*     <div class="container">*/
/*       <section id="content">*/
/* */
/*         <div id="content-header">*/
/* */
/*           {{ page.breadcrumb }}*/
/* */
/*           {% if page.highlighted|render %}*/
/*             <div id="highlighted">{{ page.highlighted }}</div>*/
/*           {% endif %}*/
/* */
/*           {{ title_prefix }}*/
/* */
/*           {% if title %}*/
/*             <h1 class="title">{{ title }}</h1>*/
/*           {% endif %}*/
/* */
/*           {{ title_suffix }}*/
/*           {{ page.help }}*/
/* */
/*           {% if tabs %}*/
/*             <div class="tabs">{{ tabs }}</div>*/
/*           {% endif %}*/
/* */
/*           {% if action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endif %}*/
/* */
/*         </div><!-- /#content-header -->*/
/* */
/*         <div id="content-area">*/
/*           {{ page.content }}*/
/*         </div>*/
/* */
/*       </section><!-- /#content -->*/
/* */
/*       {% if page.sidebar_first|render %}*/
/*         <aside id="sidebar-first" class="column sidebar first">*/
/*           {{ page.sidebar_first }}*/
/*         </aside><!-- /#sidebar-first -->*/
/*       {% endif %}*/
/* */
/*       {% if page.sidebar_second|render %}*/
/*         <aside id="sidebar-second" class="column sidebar second">*/
/*           {{ page.sidebar_second }}*/
/*         </aside><!-- /#sidebar-second -->*/
/*       {% endif %}*/
/*     </div><!-- /.container -->*/
/*   </div><!-- /#main -->*/
/* */
/*   <!-- ______________________ FOOTER _______________________ -->*/
/* */
/*   {% if page.footer|render %}*/
/*     <footer id="footer">*/
/*       <div class="container">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer><!-- /#footer -->*/
/*   {% endif %}*/
/* */
/* </div><!-- /.layout-container -->*/
/* */
