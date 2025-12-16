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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_comunicados.html.twig */
class __TwigTemplate_acabc5a2bd4e71fdea2d93189f71e752 extends Template
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
        // line 18
        yield "


<div id=\"comunicado\" class=\"row\" style='margin-bottom: 25px;'>

\t";
        // line 23
        $context["comunicados"] = [];
        // line 24
        yield "
\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            yield "
\t";
            // line 27
            $context["comunicado"] = ["titulo" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27), "#row", [], "array", false, false, true, 27)), "_entity", [], "any", false, false, true, 27), "field_titulo_comunicado", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), "contenido" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 28
$context["row"], "content", [], "any", false, false, true, 28)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "#row", [], "array", false, false, true, 28)), "_entity", [], "any", false, false, true, 28), "field_contenido_comunicado", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), "archivo" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["row"], "content", [], "any", false, false, true, 29)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29), "#row", [], "array", false, false, true, 29)), "_entity", [], "any", false, false, true, 29), "field_archivo_comunicado", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "getFileUri", [], "method", false, false, true, 29))];
            // line 31
            yield "
\t\t\t\t";
            // line 32
            $context["comunicados"] = Twig\Extension\CoreExtension::merge(($context["comunicados"] ?? null), [($context["comunicado"] ?? null)]);
            // line 33
            yield "\t<div class='col-sm-12'>
\t\t<div class='card' style='margin-bottom: 25px;'>
\t\t\t<div class='card-body'>
\t\t\t\t<p class='texto-default'>
\t\t\t\t\t";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), "#row", [], "array", false, false, true, 37)), "_entity", [], "any", false, false, true, 37), "field_fecha_comunicado", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37)) {
                // line 38
                yield "\t\t\t\t\t\t<small class='texto-default text-muted'>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38), "#row", [], "array", false, false, true, 38)), "_entity", [], "any", false, false, true, 38), "field_fecha_comunicado", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), "d/m/Y"), "html", null, true);
                yield "
\t\t\t\t\t";
            }
            // line 40
            yield "\t\t\t\t\t\t|
\t\t\t\t\t\t";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41), "#row", [], "array", false, false, true, 41)), "_entity", [], "any", false, false, true, 41), "field_lugar_comunicado", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), "html", null, true);
            yield "</small>
\t\t\t\t</p>
\t\t\t\t<h5 class='card-title'>";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43), "#row", [], "array", false, false, true, 43)), "_entity", [], "any", false, false, true, 43), "field_titulo_comunicado", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), "html", null, true);
            yield "</h5>
\t\t\t\t<p  class=\"resumen card-text\">
\t\t\t\t\t";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v7 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#row", [], "array", false, false, true, 45)), "_entity", [], "any", false, false, true, 45), "field_resumen_comunicado", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), "html", null, true);
            yield "</p>
\t\t\t</div>
\t\t\t<div class='card-footer bg-transparent' style='border: none;'>
\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t<a href=\"";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 49)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 49), "#row", [], "array", false, false, true, 49)), "_entity", [], "any", false, false, true, 49), "field_archivo_comunicado", [], "any", false, false, true, 49), "entity", [], "any", false, false, true, 49), "getFileUri", [], "method", false, false, true, 49)), "html", null, true);
            yield "\" class=\"btn\" role=\"button\" style='border: none;'
\t\t\t\t\t\ttarget=\"_blank\">
\t\t\t\t\t\t<p>Descargar PDF
\t\t\t\t\t\t\t<i class=\"bi bi-download\">
\t\t\t\t\t\t</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"btn\" role=\"button\" style='border: none;'>
\t\t\t\t\t\t<p class='text-lg-end ver-comunicado' data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\"
\t\t\t\t\t\t\tdata-post-id=\"";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 57), "html", null, true);
            yield "\">Ver comunicado
\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "</div>




<div  class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
\taria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t<div id=\"comunicado\" class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" style=\"max-width: 800px;\">
\t\t<div id=\"modal-comunicado\" class=\"fondo-default modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"staticBackdropLabel\">
\t\t\t\t\t<strong>Comunicado</strong>
\t\t\t\t</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<h5 id=\"modal-titulo\"></h5>
\t\t\t\t<div class=\"contenido-modal texto-default\" id=\"modal-contenido\" style=\"white-space: pre-wrap;\"></div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"\" target=\"_blank\" id=\"modal-archivo\" class=\"btn texto-default\">Descargar
\t\t\t\t\t<i class=\"icono-color bi bi-file-earmark-pdf-fill\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\tvar postData = JSON.parse(\"";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, json_encode(($context["comunicados"] ?? null)), "js"), "html", null, true);
        yield "\");
</script>
<script>
\tlet items = document.querySelectorAll('.otro .carousel .carousel-item')

\tdocument.querySelectorAll('.ver-comunicado').forEach(item => {
\t\titem.addEventListener('click', event => {
\t\t\tconst postId = item.getAttribute('data-post-id');
\t\t\tconst titulo = document.getElementById('modal-titulo');
\t\t\tconst contenido = document.getElementById('modal-contenido');
\t\t\tconst archivo = document.getElementById('modal-archivo');

\t\t\tconst post = postData[postId];
\t\t\ttitulo.textContent = post.titulo;
\t\t\tcontenido.innerHTML = post.contenido;
\t\t\tarchivo.setAttribute('href', post.archivo);
\t\t});
\t});
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_comunicados.html.twig";
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
        return array (  184 => 95,  154 => 67,  130 => 57,  119 => 49,  112 => 45,  107 => 43,  102 => 41,  99 => 40,  93 => 38,  91 => 37,  85 => 33,  83 => 32,  80 => 31,  78 => 29,  77 => 28,  76 => 27,  73 => 26,  56 => 25,  53 => 24,  51 => 23,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_comunicados.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_comunicados.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "for" => 25, "if" => 37];
        static $filters = ["merge" => 32, "escape" => 38, "date" => 38, "e" => 95, "json_encode" => 95];
        static $functions = ["file_url" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'escape', 'date', 'e', 'json_encode'],
                ['file_url'],
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
