<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gobbo_tema/templates/content/node--notas-de-prensa-sector-electrico.html.twig */
class __TwigTemplate_623ce9034395c15634398b67fcf76ca6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        yield "

";
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 75
        yield "
  <style>
    /* Estilos del toast */
\t#toast {
        visibility: hidden;
        min-width: 300px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 8px;
        padding: 16px;
        position: absolute;
        z-index: 1;
        left: 30%;
        bottom: 10px;
        font-size: 16px;
        opacity: 0;
        transition: opacity 0.5s ease-in-out, bottom 0.5s;
    }

    #toast.show {
        visibility: visible;
        opacity: 1;
        bottom: 50px;
    }
  </style>
<article id='nota-prensa' ";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 102), "html", null, true);
        yield ">


\t<div class=\"container pt-0 detalle-nota\">
\t\t<div class=\"row\">
\t\t\t<div class='col-sm-8'>
\t\t\t\t<div class=\"pt-4\" style='border: none;'>
\t\t\t\t\t<div class=\"card-body pt-0\">
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\">Inicio</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"/p-gina-de-notas-de-prensa\">Notas
\t\t\t\t\t\t\t\t\t\tde prensa</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t\t\t\t\t";
        // line 120
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = ($context["content"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["field_titulo_nota"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_nota", [], "array", false, false, true, 120))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["field_titulo_nota"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_nota", [], "array", false, false, true, 120)), "#items", [], "array", false, false, true, 120)), "value", [], "any", false, false, true, 120), "html", null, true);
        yield "</li>

\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">

\t\t\t<div class='col-12 col-sm-12 col-md-10 col-lg-9'>
\t\t\t\t<div class=\"py-2\" style='border: none;'>

\t\t\t\t\t<div class=\"card-body pt-0\">

\t\t\t\t\t\t<h2>";
        // line 138
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = ($context["content"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["field_titulo_nota"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_nota", [], "array", false, false, true, 138))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["content"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["field_titulo_nota"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_nota", [], "array", false, false, true, 138)), "#items", [], "array", false, false, true, 138)), "value", [], "any", false, false, true, 138), "html", null, true);
        yield "</h2>

\t\t\t\t\t\t<div class=\"d-flex justify-content-end\" style='margin-bottom: 10px;'>
\t\t\t\t\t\t\t<div id=\"red-social\" class=\"m-0 texto-default\" style=\"border-bottom: 2px solid;\">
\t\t\t\t\t\t\t\t<div class=\"text-lg-end\" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t<p class='mb-0 pb-0 ms-2 texto-default text-start'>
\t\t\t\t\t\t\t\t\t\t<strong>Compartir</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 146
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "node/";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 146), "html", null, true);
        yield "\" class=\"mx-3 text-reset\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon texto-default bi bi-facebook fs-3\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"https://wa.me/?text=¡Mira%20este%20sitio%20web!%20";
        // line 149
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "node/";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 149), "html", null, true);
        yield "\" target=\"_blank\" class=\"mx-3 text-reset\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon texto-default bi bi-whatsapp fs-3\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/intent/tweet?text=¡Mira%20este%20sitio%20web!%20";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "node/";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 152), "html", null, true);
        yield "\" class=\"mx-3 text-reset\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon texto-default bi bi-twitter-x fs-3\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a onclick=\"copyLink()\" class=\"mx-3 text-reset\" target=\"_blank\" style=\"cursor: pointer;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon texto-default bi bi-link fs-3\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div id=\"toast\">¡Enlace copiado al portapapeles!</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"card-text parrafo-resumen\">";
        // line 165
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = ($context["content"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["field_resumen_nota"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_resumen_nota", [], "array", false, false, true, 165))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["content"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["field_resumen_nota"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_resumen_nota", [], "array", false, false, true, 165)), "#items", [], "array", false, false, true, 165)), "value", [], "any", false, false, true, 165), "html", null, true);
        yield "</p>
\t\t\t\t\t\t<div class=\"pb-2\">
\t\t\t\t\t\t\t";
        // line 167
        $context["date_service"] = CoreExtension::getAttribute($this->env, $this->source, ($context["drupal_date"] ?? null), "formatter", [], "any", false, false, true, 167);
        // line 168
        yield "
\t\t\t\t\t\t\t<img src='";
        // line 169
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_imagen_nota", [], "any", false, false, true, 169), "entity", [], "any", false, false, true, 169), "getFileUri", [], "method", false, false, true, 169)), "html", null, true);
        yield "'
\t\t\t\t\t\t\t\tclass='card-img-top mx-auto'>
\t\t\t\t\t\t\t<p style=\"font-size: 12px;\" class=\"pt-2 card-text texto-default\">
\t\t\t\t\t\t\t\t";
        // line 172
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_descripcion_nota", [], "any", false, false, true, 172), "value", [], "any", false, false, true, 172), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"card-title parrafo-fecha texto-default\">";
        // line 174
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_lugar_nota", [], "any", false, false, true, 174), "value", [], "any", false, false, true, 174), "html", null, true);
        yield ",
\t\t\t\t\t\t\t";
        // line 175
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 175), "value", [], "any", false, false, true, 175), "j"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 175), "value", [], "any", false, false, true, 175), "custom", "F"), "html", null, true);
        yield "
\t\t\t\t\t\t\tde
\t\t\t\t\t\t\t";
        // line 177
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 177), "value", [], "any", false, false, true, 177), "Y"), "html", null, true);
        yield "

\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"pt-2 texto-default\" id=\"contenido-nota-prensa\" style=\"text-align: justify;\">
\t\t\t\t\t\t\t";
        // line 181
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_contenido_nota", [], "any", false, false, true, 181), "value", [], "any", false, false, true, 181));
        yield "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"card-footer bg-transparent border-success\">Footer</div> -->
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- <div class='col-sm-4'>
\t\t\t\t\t\t
\t\t\t\t\t\t        </div> -->

\t\t</div>


\t</div>
</article>

<script>
  function copyLink() {
    const link = window.location.href;
    navigator.clipboard.writeText(link).then(() => {
\t\tshowToast();
    });
  }
  function showToast() {
      const toast = document.getElementById(\"toast\");
      toast.className = \"show\";
      setTimeout(() => {
        toast.className = toast.className.replace(\"show\", \"\");
      }, 3000); 
    }
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "drupal_date"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/content/node--notas-de-prensa-sector-electrico.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  214 => 181,  207 => 177,  200 => 175,  196 => 174,  191 => 172,  185 => 169,  182 => 168,  180 => 167,  175 => 165,  157 => 152,  149 => 149,  141 => 146,  130 => 138,  109 => 120,  99 => 113,  85 => 102,  56 => 75,  54 => 71,  53 => 70,  52 => 69,  51 => 68,  50 => 67,  49 => 65,  44 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/content/node--notas-de-prensa-sector-electrico.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/content/node--notas-de-prensa-sector-electrico.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 65];
        static $filters = ["escape" => 62, "clean_class" => 67, "date" => 175, "format_date" => 175, "raw" => 181];
        static $functions = ["attach_library" => 62, "url" => 113, "file_url" => 169];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'clean_class', 'date', 'format_date', 'raw'],
                ['attach_library', 'url', 'file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
