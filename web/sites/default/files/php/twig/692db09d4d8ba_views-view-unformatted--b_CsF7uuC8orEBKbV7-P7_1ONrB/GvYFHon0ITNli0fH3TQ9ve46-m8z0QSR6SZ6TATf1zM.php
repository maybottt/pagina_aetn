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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-servicios-sector-nuclear.html.twig */
class __TwigTemplate_94f9e75b918a2c11aa7d366701b6e43f extends Template
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
        // line 19
        yield "
<div id=\"enlaces-interes\" >
\t
\t<div id=\"enlacesCarrousel\" class=\"row  mx-auto my-2 justify-content-center enlaces";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 22), "html", null, true);
        yield "\">
\t\t<div style=\"display: flex;\" id=\"carousel";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 23), "html", null, true);
        yield "\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"position-relative mx-2\">
\t\t\t\t<a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#carousel";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 25), "html", null, true);
        yield "\" role=\"button\"
\t\t\t\t\tdata-bs-slide=\"prev\">
\t\t\t\t\t<i class=\"align-middle bi bi-caret-left-fill\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t";
        // line 31
        $context["bandera"] = true;
        // line 32
        yield "\t\t\t\t
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            yield "\t
\t\t\t\t";
            // line 36
            yield "\t\t\t\t<div class=\"carousel-item ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bandera"] ?? null)) ? ("active") : ("")));
            yield " mt-2\">
\t\t\t\t\t<div class='col-6 col-md-3'>
\t\t\t\t\t\t<div class='card'>
\t\t\t\t\t\t\t<div class='card-body text-center'>
\t\t\t\t\t\t\t\t<img style=\"object-fit: contain;\" src='";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 40), "#row", [], "array", false, false, true, 40)), "_entity", [], "any", false, false, true, 40), "field_imagen_enlaceinteres", [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "getFileUri", [], "method", false, false, true, 40)), "html", null, true);
            yield "' class='card-img-top mx-auto' alt='imagen' width='50' height='210'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='card-footer bg-transparent' style='border: none;'>
\t\t\t\t\t\t\t\t<div class='row justify-content-center'>
\t\t\t\t\t\t\t\t\t<div class='col-auto px-0'>
\t\t\t\t\t\t\t\t\t\t";
            // line 45
            $context["enlace"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#row", [], "array", false, false, true, 45)), "_entity", [], "any", false, false, true, 45), "field_enlace_enlaceinteres", [], "any", false, false, true, 45), "uri", [], "any", false, false, true, 45);
            // line 46
            $context["titulo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46), "#row", [], "array", false, false, true, 46)), "_entity", [], "any", false, false, true, 46), "field_enlace_enlaceinteres", [], "any", false, false, true, 46), "title", [], "any", false, false, true, 46);
            // line 47
            yield "
";
            // line 48
            if ((is_string($_v3 = ($context["enlace"] ?? null)) && is_string($_v4 = "internal:/") && str_starts_with($_v3, $_v4))) {
                // line 49
                yield "  ";
                $context["enlace"] = (($context["base_path"] ?? null) . Twig\Extension\CoreExtension::replace(($context["enlace"] ?? null), ["internal:/" => ""]));
                // line 50
                yield "  ";
                $context["target"] = "_self";
            } else {
                // line 52
                yield "  ";
                $context["target"] = "_blank";
            }
            // line 54
            yield "
<a style=\"display: flex;\" href=\"";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["enlace"] ?? null), "html", null, true);
            yield "\" target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["target"] ?? null), "html", null, true);
            yield "\">
  <p class='card-text px-0'>
    ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["titulo"] ?? null), "html", null, true);
            yield "
  </p>
  ";
            // line 59
            if ((($context["target"] ?? null) == "_blank")) {
                // line 60
                yield "    <i class='px-2 mb-2 bi bi-box-arrow-up-right'></i>
  ";
            }
            // line 62
            yield "</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 70
            $context["bandera"] = false;
            // line 71
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "\t\t\t</div>
\t\t\t<div class=\"position-relative mx-2\">
\t\t\t\t<a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#carousel";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 74), "html", null, true);
        yield "\" role=\"button\"
\t\t\t\t\tdata-bs-slide=\"next\">
\t\t\t\t\t<i class=\"bi bi-caret-right-fill\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

</div>











";
        // line 95
        yield "

<script>
\tvar dato  = \"";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 98), "html", null, true);
        yield "\"
\tlet items";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 99), "html", null, true);
        yield " = document.querySelectorAll('.enlaces";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 99), "html", null, true);
        yield " .carousel .carousel-item')
\titems";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 100), "html", null, true);
        yield ".forEach((el) => {
\t\tconst minPerSlide = 4
\t\tlet next = el.nextElementSibling
\t\tfor (var i = 1; i < minPerSlide; i++) {
\t\t\tif (!next) {
\t\t\t\tnext = items";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 105), "html", null, true);
        yield "[0]
\t\t\t}
\t\t\tlet cloneChild = next.cloneNode(true)
\t\t\tel.appendChild(cloneChild.children[0])
\t\t\tnext = next.nextElementSibling
\t\t}
\t})
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["view", "rows", "base_path"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-servicios-sector-nuclear.html.twig";
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
        return array (  204 => 105,  196 => 100,  190 => 99,  186 => 98,  181 => 95,  158 => 74,  154 => 72,  148 => 71,  146 => 70,  136 => 62,  132 => 60,  130 => 59,  125 => 57,  118 => 55,  115 => 54,  111 => 52,  107 => 50,  104 => 49,  102 => 48,  99 => 47,  97 => 46,  95 => 45,  87 => 40,  79 => 36,  76 => 34,  72 => 33,  69 => 32,  67 => 31,  58 => 25,  53 => 23,  49 => 22,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-servicios-sector-nuclear.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-servicios-sector-nuclear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "for" => 33, "if" => 48];
        static $filters = ["escape" => 22, "replace" => 49];
        static $functions = ["file_url" => 40];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'replace'],
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
