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

/* profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_f481cf880fe35260ad8f801ceedf4968f850257e3de18b50c4dcd792497a80c1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 38, "block" => 46, "if" => 49];
        $filters = ["escape" => 45, "t" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'block', 'if'],
                ['escape', 't'],
                []
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
        // line 36
        echo "
<button href=\"#\" data-toggle=\"collapse\" data-target=\"#main-navigation\" type=\"button\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
  <span>";
        // line 38
        echo t("Menu", array());
        echo "</span>
  <span class=\"sr-only\">
    ";
        // line 40
        echo t("Toggle navigation", array());
        // line 41
        echo "  </span>
</button>

<div id=\"main-navigation\" class=\"collapse navbar-collapse\">
  <div class=\"navbar-search\">";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "links", []), "search_block", [])), "html", null, true);
        echo "</div>
  ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "  ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "links", [], "any", false, true), "search_block", [], "any", true, true)) {
            // line 50
            echo "    <div class=\"navbar__open-search-control\">
      <a href=\"";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("/search/all");
            echo "\" class=\"navbar__open-search-block\" rel=\"search\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to open search box"));
            echo "\">
        <span class=\"invisible\">";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search"));
            echo "</span>
        <svg class=\"navbar-nav__icon navbar-nav__icon--search\">
          <use xlink:href=\"#icon-search\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 59
        echo "</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        // line 47
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 47,  106 => 46,  101 => 59,  91 => 52,  85 => 51,  82 => 50,  79 => 49,  77 => 46,  73 => 45,  67 => 41,  65 => 40,  60 => 38,  56 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig", "/home/sergiocan/Documents/opensocial/DIRECTORY/html/profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig");
    }
}
