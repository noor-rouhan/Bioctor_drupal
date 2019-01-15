<?php

/* themes/sales_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_16d1d25a5e28bec6510b56adb0458ee191b55a19c3866aef26ca5ebb486ad2e1 extends Twig_Template
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
        $tags = array("if" => 62, "for" => 133);
        $filters = array("raw" => 134, "date" => 449);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", array()) || $this->getAttribute(($context["page"] ?? null), "top_menu", array()))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-6\">
          ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", array())) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_email", array()), "html", null, true));
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-6\">
          ";
            // line 77
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", array())) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_menu", array()), "html", null, true));
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-2\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 102
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 104
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 110
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 112
        echo "        </div>
        <!-- End: Main menu -->

        <!-- Start: Search -->
        <div class=\"col-md-2\">
            ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 118
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
            ";
        }
        // line 119
        echo "        
        </div>
        <!-- End: Search -->

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 130
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 131
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 134
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "      </ul>
    </div>
  ";
        }
        // line 139
        echo "<!-- End: Slider -->


<!-- Start: Testimonials -->
  ";
        // line 143
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "testimonials", array()))) {
            // line 144
            echo "    <div class=\"testimonials-wrap\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "testimonials", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "<!--End: Testimonials -->


<!-- Start: Home page message -->
  ";
        // line 158
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()))) {
            // line 159
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 167
        echo "<!--End: Home page message -->


<!-- Start: Highlight region -->
  ";
        // line 171
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 172
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 175
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 180
        echo "<!-- End: Highlight region -->


<!-- Start Top Widgets -->
";
        // line 184
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
            // line 185
            echo "  <div class=\"topwidget\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Top widget first -->          
        ";
            // line 190
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                // line 191
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 192
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 194
            echo "          
        <!-- End: Top widget first --> 

        <!-- Start: Top widget second -->          
        ";
            // line 198
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                // line 199
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 200
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 202
            echo "          
        <!-- End: Top widget second --> 
        
        <!-- Start: Top widget third -->         
        ";
            // line 206
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                // line 207
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 208
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 210
            echo "          
        <!-- End: Top widget third --> 

      </div>
    </div>
  </div>
";
        }
        // line 217
        echo "<!-- End: Top Widgets -->


<!-- Start: Page title -->
";
        // line 221
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 222
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 227
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 234
        echo "<!-- End: Page title -- >


<!-- Start: Content Layout -->
<div id=\"wrapper\">  
  <div class=\"container\">
    
    <!-- Start: Content top -->
      ";
        // line 242
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 243
            echo "        <div class=\"row\">
          ";
            // line 244
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 247
        echo "    <!-- End: Content top -->
    
    <!-- Start: Breadcrumb -->
    ";
        // line 250
        if ( !($context["is_front"] ?? null)) {
            // line 251
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 252
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
      </div>
    ";
        }
        // line 255
        echo "    <!-- End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 260
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 261
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 262
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 263
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 267
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 270
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 271
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 272
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 273
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 277
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 280
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 281
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 282
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 283
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 287
        echo "      <!-- End: Right SideBar -->
      
    </div>
    <!--End: Content -->

  </div>
</div>
<!-- End: Content Layout -->


<!-- Start: Address -->
  ";
        // line 298
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "address", array()))) {
            // line 299
            echo "    <div class=\"address-wrap\">
      ";
            // line 300
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "address", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 303
        echo "<!--End: Address -->


<!-- Start: Bottom Widgets-->
";
        // line 307
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array())))) {
            // line 308
            echo "  <div class=\"bottom-widgets\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 313
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                // line 314
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 315
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 317
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 321
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                // line 322
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 323
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 325
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 329
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                // line 330
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 331
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 333
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 337
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                // line 338
                echo "        <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
          ";
                // line 339
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 342
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>
";
        }
        // line 348
        echo "<!-- End: Bottom Widgets-->


<!-- Start: Footer -->
";
        // line 352
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 353
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 358
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 359
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 360
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 363
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 366
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 367
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 368
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 371
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 374
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 375
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 376
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>
";
        }
        // line 385
        echo "<!--End: Footer -->


<!-- Start: Google map -->
";
        // line 389
        if ($this->getAttribute(($context["page"] ?? null), "google_map", array())) {
            // line 390
            echo "  <div class=\"google_map\">
    ";
            // line 391
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 394
        echo "<!-- End: Google map -->


<!-- Start: Footer Menu -->
";
        // line 398
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 399
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Footer Menu -->
        <div class=\"col-sm-6\">
          ";
            // line 405
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Footer Menu -->

        <!-- Start: Social media links -->
        ";
            // line 410
            if (($context["show_social_icon"] ?? null)) {
                // line 411
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 413
                if (($context["facebook_url"] ?? null)) {
                    // line 414
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 416
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 417
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 419
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 420
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 422
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 423
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 425
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 426
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 428
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 429
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 431
                echo "            </div>
          </div>
        ";
            }
            // line 434
            echo "        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 440
        echo "<!-- End: Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 449
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 454
        if (($context["show_credit_link"] ?? null)) {
            // line 455
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 459
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/sales_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 459,  770 => 455,  768 => 454,  760 => 449,  749 => 440,  741 => 434,  736 => 431,  730 => 429,  727 => 428,  721 => 426,  718 => 425,  712 => 423,  709 => 422,  703 => 420,  700 => 419,  694 => 417,  691 => 416,  685 => 414,  683 => 413,  679 => 411,  677 => 410,  669 => 405,  661 => 399,  659 => 398,  653 => 394,  647 => 391,  644 => 390,  642 => 389,  636 => 385,  628 => 379,  622 => 376,  617 => 375,  615 => 374,  610 => 371,  604 => 368,  599 => 367,  597 => 366,  592 => 363,  586 => 360,  581 => 359,  579 => 358,  572 => 353,  570 => 352,  564 => 348,  556 => 342,  550 => 339,  545 => 338,  543 => 337,  537 => 333,  531 => 331,  526 => 330,  524 => 329,  518 => 325,  512 => 323,  507 => 322,  505 => 321,  499 => 317,  493 => 315,  488 => 314,  486 => 313,  479 => 308,  477 => 307,  471 => 303,  465 => 300,  462 => 299,  460 => 298,  447 => 287,  440 => 283,  436 => 282,  433 => 281,  431 => 280,  426 => 277,  419 => 273,  415 => 272,  412 => 271,  410 => 270,  405 => 267,  398 => 263,  394 => 262,  391 => 261,  389 => 260,  382 => 255,  376 => 252,  373 => 251,  371 => 250,  366 => 247,  360 => 244,  357 => 243,  355 => 242,  345 => 234,  335 => 227,  328 => 222,  326 => 221,  320 => 217,  311 => 210,  305 => 208,  300 => 207,  298 => 206,  292 => 202,  286 => 200,  281 => 199,  279 => 198,  273 => 194,  267 => 192,  262 => 191,  260 => 190,  253 => 185,  251 => 184,  245 => 180,  237 => 175,  232 => 172,  230 => 171,  224 => 167,  216 => 162,  211 => 159,  209 => 158,  203 => 154,  194 => 148,  188 => 144,  186 => 143,  180 => 139,  175 => 136,  166 => 134,  162 => 133,  158 => 131,  156 => 130,  143 => 119,  137 => 118,  135 => 117,  128 => 112,  122 => 110,  120 => 109,  113 => 104,  107 => 102,  105 => 101,  89 => 87,  80 => 80,  74 => 78,  72 => 77,  65 => 72,  59 => 70,  57 => 69,  49 => 63,  47 => 62,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sales_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\sales_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
