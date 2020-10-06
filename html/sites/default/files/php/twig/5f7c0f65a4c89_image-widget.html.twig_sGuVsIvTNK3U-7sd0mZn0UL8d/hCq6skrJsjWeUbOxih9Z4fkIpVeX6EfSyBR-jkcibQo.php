<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig */
class __TwigTemplate_4c9ef9e0b830eb46852e921502682d5877cb0b8dfefa90701f2c8afa8cceef64 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16, "set" => 17, "trans" => 49];
        $filters = ["escape" => 23, "without" => 32];
        $functions = ["attach_library" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['escape', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 15
        echo "
";
        // line 16
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($this->getAttribute(($context["data"] ?? null), "upload", []), "#id", [], "array")) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "edit-field-post-image-0-upload") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 17
            echo "  ";
            $context["in_post"] = true;
        } else {
            // line 19
            echo "  ";
            $context["in_post"] = false;
        }
        // line 21
        echo "
";
        // line 22
        if ($this->getAttribute(($context["data"] ?? null), "preview", [])) {
            // line 23
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/image-widget"), "html", null, true);
            echo "
  <div";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "image-widget"], "method"), "removeClass", [0 => "clearfix"], "method")), "html", null, true);
            echo ">
    <div class=\"preview\">
      ";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "preview", [])), "html", null, true);
            echo "
    </div>
    <div class=\"data image-widget-data\">

      ";
            // line 30
            if (($context["in_post"] ?? null)) {
                // line 31
                echo "        ";
                // line 32
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null)), "preview", "image_crop", ("file_" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), "fids", []), "#value", [], "array"), 0, [], "array"))), "remove_button"), "html", null, true);
                echo "
      ";
            } else {
                // line 34
                echo "        ";
                // line 35
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null)), "preview", "image_crop"), "html", null, true);
                echo "
      ";
            }
            // line 37
            echo "
    </div>
  </div>

  ";
            // line 41
            if (($context["in_post"] ?? null)) {
                // line 42
                echo "    ";
                // line 43
                echo "    <div class=\"hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "remove_button", [])), "html", null, true);
                echo "</div>
    <button type=\"button\" id=\"post-photo-remove\" class=\"btn--post-remove-image\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-close\"></use>
      </svg>
      <span class=\"sr-only\">
        ";
                // line 49
                echo t("Remove image", array());
                // line 50
                echo "      </span>
    </button>

  ";
            } else {
                // line 54
                echo "
    ";
                // line 55
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("image_widget_crop/cropper"), "html", null, true);
                echo "
    ";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "image_crop", [])), "html", null, true);
                echo "

  ";
            }
            // line 59
            echo "
";
        } else {
            // line 61
            echo "
  ";
            // line 62
            if (($context["in_post"] ?? null)) {
                // line 63
                echo "
    ";
                // line 65
                echo "    <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "hidden"], "method")), "html", null, true);
                echo ">
      ";
                // line 66
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null)), "html", null, true);
                echo "
    </div>
    <button type=\"button\" id=\"post-photo-add\" class=\"btn btn-default\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-plus\"></use>
      </svg>
      <span>
        ";
                // line 73
                echo t("Add image", array());
                // line 74
                echo "      </span>
    </button>

  ";
            } else {
                // line 78
                echo "
    <div";
                // line 79
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                echo ">
      ";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null)), "html", null, true);
                echo "
    </div>

  ";
            }
            // line 84
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 84,  191 => 80,  187 => 79,  184 => 78,  178 => 74,  176 => 73,  166 => 66,  161 => 65,  158 => 63,  156 => 62,  153 => 61,  149 => 59,  143 => 56,  139 => 55,  136 => 54,  130 => 50,  128 => 49,  118 => 43,  116 => 42,  114 => 41,  108 => 37,  102 => 35,  100 => 34,  94 => 32,  92 => 31,  90 => 30,  83 => 26,  78 => 24,  73 => 23,  71 => 22,  68 => 21,  64 => 19,  60 => 17,  58 => 16,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig", "/home/sergiocan/Documents/opensocial/DIRECTORY/html/profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig");
    }
}
